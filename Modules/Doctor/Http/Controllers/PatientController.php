<?php

namespace Modules\Doctor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Doctor\repositories\DoctorRepository;
use Auth;
use Yajra\DataTables\DataTables;

class PatientController extends Controller
{
   public function index()
   {
       return view('doctor::patients');
   }

   public function datatable(DoctorRepository $DoctorRepo)
   {
        $doctor=$DoctorRepo->find(Auth::guard('doctor')->user()->id);
        return DataTables::of($doctor->patients)
        ->addcolumn('name',function($row){
            return $row->name;
        })
        ->addcolumn('email',function($row){
            return $row->email;
        })
        ->addcolumn('phone',function($row){
            return $row->phone;
        })
        ->make(true);
   }
}
