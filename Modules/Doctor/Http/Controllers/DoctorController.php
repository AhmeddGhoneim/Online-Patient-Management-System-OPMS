<?php

namespace Modules\Doctor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Doctor\repositories\CategoryRepository;
use Modules\Doctor\repositories\DoctorRepository;
use Auth;
use Alert;
use Modules\Admin\Entities\Appointment;
use DB;
use Modules\Doctor\Entities\Blog;
class DoctorController extends Controller
{
    public function doctorDashboard()
    {
        $data['blogs']=Blog::where('doctor_id',Auth::guard('doctor')->user()->id)->count();
        $data['appointments']=Appointment::where('doctor_id',Auth::guard('doctor')->user()->id)->count();
        $data['patients']=DB::table('doctor_patients')->where('doctor_id',Auth::guard('doctor')->user()->id)->count();
        return view('doctor::dashboard',compact('data'));
    }
    
    public function profile(DoctorRepository $doctoreRepo,CategoryRepository $CategoryRepository)
    {
        $times = ['12::00am','1::00am','2::00am','3::00am','4::00am','5::00am','6::00am','7::00am','8::00am','9::00am','10::00am','11::00am','12::00pm',
        '12::00pm','1::00pm','2::00pm','3::00pm','4::00pm','5::00pm','6::00pm','7::00pm','8::00pm','9::00pm','10::00pm','11::00pm'];
        $doctor = Auth::guard('doctor')->user();
        $days= json_decode($doctor->days);
        $categories= $CategoryRepository->all();
       
        return view('doctor::profile',compact('doctor','days','categories','times'));
    }

    public function UpdateProfile(Request $request,DoctorRepository $doctoreRepo)
    {
        if($request->password){
            $request->validate([
               'password' => 'required|confirmed|min:6',
             ]);
       }
       $doctor = $doctoreRepo->update(Auth::guard('doctor')->user()->id,$request);
       Alert::success('SuccessAlert','Done Successfully');

       return redirect()->back();
    }
}
