<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use  Modules\Front\repositories\PatientRepository;
use Yajra\DataTables\DataTables;
Use Alert;
use Modules\Doctor\repositories\CategoryRepository;
use Modules\Admin\Http\Requests\AdminPatientRequest;


class AdminPatientController extends Controller
{
    
    public function index()
    {
        return view('admin::patient.index');
    }

    public function datatable(PatientRepository $patientReRepo)
    {
        $patients = $patientReRepo->getAll();
        
        return DataTables::of($patients)
        ->addcolumn('name',function($row){
            return $row->name;
        })
        ->addcolumn('phone',function($row){
            return $row->phone;
        })
        ->addcolumn('email',function($row){
            return $row->email;
        })

        ->addcolumn('date',function($row){
            return $row->created_at;
        })
        ->addcolumn('action',function($row){
           
                $edit='<a  href="' . url("admin/patient/edit/" . $row->id ) . '"  class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</a>' ;
                $delete='<a  href="' . route("patient.destroy", $row->id ) . '"  class="btn btn-danger rounded-pill btn-sm" ><i class="fa fa-trash"></i> Delete</a>' ;
           
                return $edit . $delete ;
        })
        ->rawColumns(['action' => 'action'])
        ->make(true);
    }


   
    public function create(CategoryRepository $CategoryRepository)
    {

        $categories= $CategoryRepository->all();

        return view('admin::patient.create',compact('categories'));
    }

  
    public function store(AdminPatientRequest $request,PatientRepository $patientReRepo)
    {
        $patient = $patientReRepo->store($request);
        Alert::success('SuccessAlert','Done Successfully');


        return redirect()->route('admin.patient.index');

    }

  
    public function show($id)
    {
        return view('admin::show');
    }

  
    public function edit($id,PatientRepository $patientReRepo)
    {
        $patient = $patientReRepo->find($id);

        return view('admin::patient.edit',compact('patient'));
    }

  
    public function update(Request $request, $id,PatientRepository $patientReRepo)
    {

    if($request->password){
         $request->validate([
            'password' => 'required|confirmed|min:6',
          ]);
    }


    $doctor = $patientReRepo->update($id,$request);
    Alert::success('SuccessAlert','Done Successfully');

    return redirect()->route('admin.patient.index');


    }

   
    public function destroy($id,PatientRepository $patientReRepo)
    {
        $patientReRepo->destroy($id);
        Alert::success('SuccessAlert','Done Successfully');

        return redirect()->route('admin.patient.index');
    }
}
