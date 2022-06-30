<?php

namespace  Modules\Doctor\repositories;
use Modules\Admin\Entities\Appointment;
use Auth;
use Modules\Admin\traits\UploadFiles;

class AppointmentRepository{
    use UploadFiles;
    private $appointment;

    public function __construct()
    {
        $this->appointment= new Appointment();
    }

    public function DoctorAppointment()
    {
        return $this->appointment->with('patient')->where('doctor_id',Auth::guard('doctor')->user()->id)->get();
    }
    public function Find($id)
    {
        return $this->appointment->FindOrFail($id);
    }
    public function ChangeStatus($id,$request)
    {
        $appointment=$this->Find($id);
        $appointment->update($request);
        
    }

    public function comment($request)
    {
        $appointment=$this->Find($request->id);
        $data=$request->all();
        if($request->report){
            $data['report']=$this->SaveFile('public/uploads/image_files',$request->report);
        }
        $appointment->update($data);
    }
}