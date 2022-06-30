<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Doctor\repositories\CategoryRepository;
use Yajra\DataTables\DataTables;
use Modules\Doctor\Http\Requests\CategoryRequest;
class AdminCategoryController extends Controller
{
    private $CategoryRepo;
    public function __construct(CategoryRepository $CategoryRepository)
    {
        $this->CategoryRepo=$CategoryRepository;
    }

    public function index()
    {
        return view('doctor::categories.index');
    }

    public function create()
    {
        return view('doctor::categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $this->CategoryRepo->create($request->all());
        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
       $category= $this->CategoryRepo->find($id);
        return view('doctor::categories.edit',compact('category'));
    }

    public function update($id,CategoryRequest $request)
    {
        $this->CategoryRepo->update($id,$request->all());
        return redirect()->route('admin.category.index');

    }

    public function destroy($id)
    {
        $this->CategoryRepo->destroy($id);
        return redirect()->route('admin.category.index');
    }

    public function datatable()
    {
        $doctors = $this->CategoryRepo->all();
        
        return DataTables::of($doctors)
        ->addcolumn('name',function($row){
            return $row->name;
        })
        
        ->addcolumn('action',function($row){
           
                $edit='<a  href="' . route("category.edit" , $row->id ) . '"  class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</a>' ;
                $delete='<a  href="' . route("category.destroy", $row->id ) . '"  class="btn btn-danger rounded-pill btn-sm" ><i class="fa fa-trash"></i> Delete</a>' ;
           

            return $edit . $delete ;
        })
        ->rawColumns(['action' => 'action','days'=>'days'])
        ->make(true);
    }
}
