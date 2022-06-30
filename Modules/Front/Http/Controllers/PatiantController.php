<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use Modules\Doctor\Entities\Doctor;
use DB;
use Modules\Admin\Entities\Appointment;
use Alert;
use Modules\Front\Http\Requests\RegisterRequest;
use Modules\Admin\traits\UploadFiles;
USE Modules\Front\Entities\Patient;
use Carbon\Carbon;
class PatiantController extends Controller
{
    use UploadFiles;
    public function index()
    {
        return view('front::pages.login');
    }

    public function login(Request $request)
    {
        $data=$request->only('email','password');
        if(Auth::guard('patiant')->attempt($data)){
           return response()->json(['status'=>'patiant']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function logout()
    {
        Auth::guard('patiant')->logout();
        return redirect('/');
    }

    public function AjaxDoctors(Request $request)
    {
        $doctors=Doctor::where('category_id',$request->id)->get();
        $options = '';
        foreach ($doctors as $doctor) {
            $options .= '<option  value="' .$doctor->id. '">' . $doctor->name  . '</option>';
        }

        return response()->json(['data'=>$options]);

    }

    public function appointment(Request $request)
    {
        $data=$request->all();
        $doctor=Doctor::findOrfail($request->doctor_id);
        //doctor days
        $days=json_decode($doctor->days);
        $appointment_day=Carbon::createFromFormat('Y-m-d', date('Y-m-d', strtotime($request->day)))->format('l');
        if(!in_array($appointment_day,$days)){
            toast('Doctor is not Available in this day!','warning');
            return redirect()->back();
        }
        //conflict times
        $check_appointment=Appointment::whereBetween('from',[$request->from,$request->to])->ORwhereBetween('to',[$request->from,$request->to])->whereDate('day',$request->day)->where('doctor_id',$request->doctor_id)->first();
        if($check_appointment){
            toast('This Appointment Is aleady Token!','warning');
            return redirect()->back();
        }

        //time_not_ava
        // if(){
        //     toast('Doctor is not Available in this Time!','warning');
        //     return redirect()->back();
        // }
       
        $data['patient_id']=Auth::guard('patiant')->user()->id;

        if($request->patient_file){
            $data['patient_file']=$this->SaveFile('public/uploads/image_files',$request->patient_file);
        }
        

        Appointment::create($data);
        $check =DB::table('doctor_patients')->where('doctor_id',$request->doctor_id)->where('patient_id',Auth::guard('patiant')->user()->id)->first();
        if(!$check){
            $doctor=Doctor::findorfail($request->doctor_id);
            $doctor->patients()->attach(Auth::guard('patiant')->user()->id);
        }
        Alert::success('SuccessAlert','Done Successfully');
        return redirect()->back();
    }

    public function register()
    {
        return view('front::pages.register');
    }

    public function PostRegister(RegisterRequest $request)
    {
        $data=$request->except('password_confirmation');
        $data['password']=bcrypt($request->password);
        $data['image']=$this->SaveFile('public/uploads/image_files',$request->image);
       $patient =  Patient::create($data);
       \Auth::guard('patiant')->loginUsingId($patient->id);
        Alert::success('SuccessAlert','Done Successfully');
        return redirect('/');

    }



    public function patiantDashboard(){

        $patient = Auth::guard('patiant')->user();
        return view('front::patient_dashboard',compact('patient'));
    }

    public function times($doctor_time,$request_from,$request_to){
        $date1 = DateTime::createFromFormat('h:i a', $doctor_time);
        $date2 = DateTime::createFromFormat('h:i a', $request_from);
        $date3 = DateTime::createFromFormat('h:i a', $request_to);
        if ($date1 > $date2 && $date1 < $date3)
        {
            TRUE;
        }
    }
}
