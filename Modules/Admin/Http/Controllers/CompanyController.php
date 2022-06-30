<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\repositories\Companyrepository;
Use Alert;
use Modules\Admin\Http\Requests\CompanyRequest;
use Modules\Admin\Http\Requests\UpdateCompanyRequest;
use Modules\Admin\Entities\Company;
use Yajra\DataTables\DataTables;

class CompanyController extends Controller
{
    private $Companyrepository;

    public function __construct(Companyrepository $Companyrepository)
    {
        $this->Companyrepository=$Companyrepository;
        $this->middleware('permission:company_read')->only(['index','datatable']);
        $this->middleware('permission:company_create')->only(['create','store']);
        $this->middleware('permission:company_update')->only(['edit','update']);
        $this->middleware('permission:company_delete')->only(['destroy']);
    }
   
    public function index()
    {
        return view('admin::company.index');
    }

    
    public function create()
    {
        return view('admin::company.create');
    }

    public function store(CompanyRequest $request)
    { 
        $this->Companyrepository->store($request);
        return  redirect()->route('company.index');
    }

    public function edit($id)
    {
        $company=$this->Companyrepository->edit($id);
        return view('admin::company.edit',compact('company'));
    }

    public function update($id,UpdateCompanyRequest $request)
    {
        $this->Companyrepository->update($id,$request);
        return  redirect()->route('company.index');
    }

    public function destroy($id)
    {
        $this->Companyrepository->destroy($id);
        return  redirect()->route('company.index');
    }

    public function datatable()
    {
        $companies=Company::get();
        
        return DataTables::of($companies)
        ->addcolumn('name',function($row){
            return $row->name;
        })
        ->addcolumn('phone',function($row){
            return $row->phone;
        })
        ->addcolumn('action',function($row){
            if(auth()->user()->haspermission('company_update')){
                $edit='<a class="btn btn-info rounded-pill btn-sm" href="'  . Route("company.edit",$row->id) . '"><i class="fa fa-edit"></i> Edit</a>' ;
            }else{
                $edit='<button class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</button>' ;
            }

            if(auth()->user()->haspermission('company_delete')){
                $delete='<a class="btn btn-danger rounded-pill btn-sm" href="'  . Route("company.destroy",$row->id) . '"><i class="fa fa-trash"></i> Delete</a>';
            }else{
                $delete='<button class="btn btn-danger rounded-pill btn-sm" disabled><i class="fa fa-trash"></i> Delete</button>';
            }
            
            
            return $edit  ;
        })
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }


}
