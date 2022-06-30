<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Doctor\repositories\DoctorRepository;
use Yajra\DataTables\DataTables;
Use Alert;
use Modules\Admin\Http\Requests\AdminDoctorRequest;
use Modules\Admin\Http\Requests\UpdateAdminDoctorRequest;
use Modules\Doctor\repositories\CategoryRepository;

class AdminDoctorController extends Controller
{
    
    public function index()
    {
      
        return view('admin::doctor.index');

    }


    public function datatable(DoctorRepository $doctoreRepo)
    {
        $doctors = $doctoreRepo->getAll();
        
        return DataTables::of($doctors)
        ->addcolumn('name',function($row){
            return $row->name;
        })
        ->addcolumn('phone',function($row){
            return $row->phone;
        })
        ->addcolumn('email',function($row){
            return $row->email;
        })

        ->addcolumn('days',function($row){
            return json_decode($row->days);
        })
        ->addcolumn('from',function($row){
            return $row->from;
        })
        ->addcolumn('to',function($row){
            return $row->to;
        })
        ->addcolumn('action',function($row){
           
                $edit='<a  href="' . url("admin/doctor/edit/" . $row->id ) . '"  class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</a>' ;
                $delete='<a  href="' . route("doctor.destroy", $row->id ) . '"  class="btn btn-danger rounded-pill btn-sm" ><i class="fa fa-trash"></i> Delete</a>' ;
           

                return $edit . $delete ;
        })
        ->rawColumns(['action' => 'action','days'=>'days'])
        ->make(true);
    }

    
    public function create(CategoryRepository $CategoryRepository)
    {
        $categories= $CategoryRepository->all();

        $times = ['12::00am','1::00am','2::00am','3::00am','4::00am','5::00am','6::00am','7::00am','8::00am','9::00am','10::00am','11::00am','12::00pm',
        '12::00pm','1::00pm','2::00pm','3::00pm','4::00pm','5::00pm','6::00pm','7::00pm','8::00pm','9::00pm','10::00pm','11::00pm'];
      
        return view('admin::doctor.create',compact('categories','times'));
    }

   
    public function store(AdminDoctorRequest $request,DoctorRepository $doctoreRepo)
    {

        $doctor = $doctoreRepo->store($request);
        Alert::success('SuccessAlert','Done Successfully');

        return redirect()->route('admin.doctor.index');

      
    }

 
    public function show($id)
    {
        return view('admin::show');
    }

    
    public function edit($id,DoctorRepository $doctoreRepo,CategoryRepository $CategoryRepository)
    {
      
        $doctor = $doctoreRepo->find($id);
        $days= json_decode($doctor->days);
        $categories= $CategoryRepository->all();
       
        $times = ['12::00am','1::00am','2::00am','3::00am','4::00am','5::00am','6::00am','7::00am','8::00am','9::00am','10::00am','11::00am','12::00pm',
        '12::00pm','1::00pm','2::00pm','3::00pm','4::00pm','5::00pm','6::00pm','7::00pm','8::00pm','9::00pm','10::00pm','11::00pm'];
      

        return view('admin::doctor.edit',compact('doctor','days','categories','times'));
    }

 
    public function update(Request $request, $id,DoctorRepository $doctoreRepo)
    {


        if($request->password){
            $request->validate([
               'password' => 'required|confirmed|min:6',
             ]);
       }
       
    //   $request->validate([
    //     'phone'=>['required','unique:doctors,phone,'.$id,'regex:/(01)[0-9]{9}/'],
    //     'email' => ['required', 'max:255', 'email', 'unique:doctors,email,'.$id],
    //     'category_id'=>'required|numeric',
    //   ]);

        $doctor = $doctoreRepo->update($id,$request);
        Alert::success('SuccessAlert','Done Successfully');

        return redirect()->route('admin.doctor.index');

    
        
    }

  
    public function destroy($id,DoctorRepository $doctoreRepo)
    {
        $doctoreRepo->destroy($id);
        Alert::success('SuccessAlert','Deleted  Successfully');

        return redirect()->route('admin.doctor.index');
    }
}
