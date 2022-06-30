<?php

namespace Modules\Doctor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Doctor\repositories\AppointmentRepository;
use Yajra\DataTables\DataTables;
use Modules\Doctor\Entities\MidicalHistory;
use Modules\Front\Entities\Patient;

use Alert;
class AppointmentController extends Controller
{
    private $AppointmentRepo;

    public function __construct(AppointmentRepository $AppointmentRepo)
    {
        $this->AppointmentRepo=$AppointmentRepo;
    }

    public function index()
    {
        return view('doctor::appointments');
    }

    public function ChangeStatus($id,Request $request)
    {
        $this->AppointmentRepo->ChangeStatus($id,$request->all());
        Alert::success('SuccessAlert','Done Successfully');
        return redirect()->back();
    }

    public function comment(Request $request)
    {
        $this->AppointmentRepo->comment($request);
        Alert::success('SuccessAlert','Done Successfully');
        return redirect()->back();
    }

    public function datatable()
    {
        $doctor_appointment=$this->AppointmentRepo->DoctorAppointment();
        return DataTables::of($doctor_appointment)
        ->addcolumn('patient',function($row){
            return $row->patient->name;
        })
        ->addcolumn('day',function($row){
            return $row->day;
        })
        ->addcolumn('from',function($row){
            return $row->from;
        })
        ->addcolumn('to',function($row){
            return $row->to;
        })

        ->addcolumn('patient_file',function($row){
           if($row->patient_file)
            return '<a download href=" '.url("/") .'/public/uploads/image_files/'. $row->patient_file .'" >Download</a>';
            return 'No File Registerd';
           

        })
        
        ->addcolumn('doctor_comment',function($row){
            $button=' <button data-id="'. $row->id.'" data-bs-toggle="modal" data-bs-target="#default" class="comment btn btn-primary rounded-pill btn-sm">Add Comment</button>';
           return $row->doctor_comment ?? $button;
        })
        ->addcolumn('status',function($row){
            
            $options = '';
            $status=['wait','accepted','cancel','Done'];
            foreach ($status as $one) {
                if($one==$row->status){
                    $selected='selected';
                }else{
                    $selected='';
                }

                $options .= '<option ' . $selected .' value="' .$one. '">' . $one  . '</option>';
            }
           return $change_role='
           <form action="' . Route('doctor.appointment.change.status',$row->id) . ' " method="POST">
                ' . csrf_field() . '
                <div class="d-flex justify-content-between align-items-center">
                    <select name="status" class="form-control my-1 mx-1" style="background: #fff;border: none;border-radius: 6px !IMPORTANT;color: #858585;font-size: 13px">
                        ' . $options . '
                    </select>
                    <button class="btn btn-primary rounded-pill btn-sm">Save</button>
                </div>
                </form';
        })

        ->addcolumn('midical_history',function($row){
            $a=' <a href="'.route('midical.history', $row->patient_id).'"  class="btn btn-primary rounded-pill btn-sm"> Midical History</a>';
           return  $a;
        })

        ->rawColumns(['status' => 'status','doctor_comment'=>'doctor_comment','patient_file' =>'patient_file','midical_history' =>'midical_history'])
        ->make(true);
    }


    public function midicalHistory ($id){
           
        $name = Patient::where('id',$id)->first()->name;
      return view('doctor::midical_history',compact('id','name'));


    }
    public function midicalHistoryDatatable($id)
    {


        $midical_history = MidicalHistory::where('patient_id',$id)->get();
        return DataTables::of($midical_history)
        ->addcolumn('syndrome',function($row){
            return $row->syndrome;
        })
        ->addcolumn('diagnosis',function($row){
            return $row->diagnosis;
        })
        ->addcolumn('drugs',function($row){
            return $row->drugs;
        })
    

        ->rawColumns(['syndrome' => 'syndrome','diagnosis'=>'diagnosis','drugs' =>'drugs'])
        ->make(true);
    }


    public function addMidicalHistory ($id){
        $name = Patient::where('id',$id)->first()->name;

        return view('doctor::add_midical_history',compact('id','name'));
  
  
      }

      public function storeMidicalHistory (Request $request){
          MidicalHistory::create($request->all());
        Alert::success('SuccessAlert','Done Successfully');

        return redirect()->route('midical.history',$request->patient_id);
  
  
      }


      

    
    
}
