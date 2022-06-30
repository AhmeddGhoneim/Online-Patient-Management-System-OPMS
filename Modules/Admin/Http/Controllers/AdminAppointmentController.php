<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\repositories\AppointmentRepository;
use Yajra\DataTables\DataTables;
Use Alert;


class AdminAppointmentController extends Controller
{
    public function index()
    {
      
        return view('admin::appointment.index');

    }


    public function datatable(AppointmentRepository $appointmentRepo)
    {
        $appointments = $appointmentRepo->getAll();
        
        return DataTables::of($appointments)
        ->addcolumn('doctor_name',function($row){
            return $row->doctor->name;
        })
        ->addcolumn('patient_name',function($row){
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
        ->addcolumn('date',function($row){
            return $row->date;
        })
        ->addcolumn('status',function($row){
            return $row->status;
        })
        // ->addcolumn('action',function($row){
           
        //         $edit='<a  href="' . url("admin/doctor/edit/" . $row->id ) . '"  class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</a>' ;
        //         $delete='<button class="btn btn-danger rounded-pill btn-sm" disabled><i class="fa fa-trash"></i> Delete</button>';
           

        //     return $edit  ;
        // })
        // ->rawColumns(['action' => 'action'])
        ->make(true);
    }





    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
