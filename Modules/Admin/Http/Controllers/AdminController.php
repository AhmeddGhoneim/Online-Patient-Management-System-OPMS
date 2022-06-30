<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\StoreUserRequest;
use Modules\Admin\repositories\UserRepository;
use Modules\Admin\Entities\Company;
use App\Models\User;
use Yajra\DataTables\DataTables;
use DB;
use Modules\Admin\Http\Requests\UpdateUserRequest;
use Modules\Front\Entities\Contact;
use Modules\Doctor\Entities\Doctor;
use Modules\Front\Entities\Patient;
use Modules\Doctor\Entities\Category;
use Modules\Admin\Entities\Appointment;
class AdminController extends Controller
{
    private $UserRepository;

    public function __construct(UserRepository $UserRepository){
        
        $this->UserRepository=$UserRepository;
        $this->middleware('permission:user_read')->only(['index','datatable']);
        $this->middleware('permission:user_create')->only(['create','store']);
        $this->middleware('permission:user_update')->only(['edit','update']);
        $this->middleware('permission:user_delete')->only(['destroy']);
    }

    public function dashboard()
    {
        $data['doctors']=Doctor::count();
        $data['patients']=Patient::count();
        $data['appointments']=Appointment::count();
        $data['categories']=Category::count();
        return view('admin::dashboard',compact('data'));
    }

    public function index()
    {
        return view('admin::user.index');
    }

    public function create()
    {
        $companies=Company::get();
        return view('admin::user.create',compact('companies'));
    }

    public function store(StoreUserRequest $request)
    {
       $this->UserRepository->store($request);
       return redirect()->route('user.index');
    }

    public function edit($id)
    {   
        $companies=Company::get();
        $companies_ids=DB::table('company_users')->where('user_id',$id)->pluck('company_id')->toArray();
        $user= $this->UserRepository->edit($id);
        return view('admin::user.edit',compact('companies','user','companies_ids'));
    }

    public function update($id,UpdateUserRequest $request)
    {
        $this->UserRepository->update($id,$request);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $this->UserRepository->destroy($id);
        return  redirect()->route('user.index');
    }

    public function contact()
    {
        return view('admin::contact.index');
    }

    public function ContactDatatable()
    {
        $contacts=Contact::get();
        return DataTables::of($contacts)
        ->addcolumn('name',function($row){
            return $row->name;
        })
        ->addcolumn('subject',function($row){
            return $row->subject;
        })
        ->addcolumn('email',function($row){
            return $row->email;
        })
        ->addcolumn('message',function($row){
            return $row->message;
        })
        ->make(true);
    }


    public function datatable()
    {
        $users=User::whereRoleIs('admin')->get();
        
        return DataTables::of($users)
        ->addcolumn('username',function($row){
            return $row->username;
        })
        ->addcolumn('phone',function($row){
            return $row->phone;
        })
        ->addcolumn('email',function($row){
            return $row->email;
        })
        ->addcolumn('allow_files',function($row){
            if($row->allow_files==0){
                return 'Allowed Files';
            }else{
                return 'All Files';
            }
        })
        ->addcolumn('enroll',function($row){
            if($row->allow_files==0){
                return $enroll='<a class="btn btn-primary btn-sm" href="'  . Route("enroll.create",$row->id) . '"><i class="fas fa-file-medical"></i> Enroll Files</a>' ;
            }else{
                return $enroll='<a style="cursor:not-allowed;" class="btn btn-primary btn-sm disabled" disabled><i class="fas fa-file-medical"></i> Enroll Files</a>' ;
            }
          
        })
        ->addcolumn('action',function($row){


            if(auth()->user()->haspermission('user_update')){
                $edit='<a class="btn btn-info rounded-pill btn-sm" href="'  . Route("user.edit",$row->id) . '"><i class="fa fa-edit"></i> Edit</a>' ;
            }else{
                $edit='<button class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</button>' ;
            }

            if(auth()->user()->haspermission('user_delete')){
                $delete='<a class="btn btn-danger rounded-pill btn-sm" href="'  . Route("user.destroy",$row->id) . '"><i class="fa fa-trash"></i> Delete</a>';
            }else{
                $delete='<button class="btn btn-danger rounded-pill btn-sm" disabled><i class="fa fa-trash"></i> Delete</button>';
            }



            return $edit  .' ' . $delete ;
        })
        ->rawColumns(['action' => 'action','enroll'=>'enroll'])
        ->make(true);
    }
}
