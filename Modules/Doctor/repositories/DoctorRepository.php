<?php
namespace  Modules\Doctor\repositories;

use Modules\Doctor\Entities\Doctor;
Use Alert;
use Modules\Admin\traits\UploadFiles;

class DoctorRepository {

    use UploadFiles;

    public function getAll(){
        
       return Doctor::all();

       
    }

    public function store($request){
        
        $data =$request->except('password_confirmation');
        $data['days'] =  json_encode( $request->days );
        $data['password'] =  bcrypt( $request->password );

        if($request->image){
            $image_new_name=$this->SaveFile('public/uploads/image_files',$request->image);
            $data['image']=$image_new_name;
        }

        if($request->attachment){
            $attachment_new_name=$this->SaveFile('public/uploads/image_files',$request->attachment);
            $data['attachment']=$attachment_new_name;
        }

     return   Doctor::create($data);
       
    }


    public function find($id)
    {
        return  Doctor::findorfail($id);
    }


    public function edit($id)
    {
        return  Doctor::findorfail($id);
    }


    public function update($id,$request)
    {
        
        if($request->password){
            $data =$request->except('password_confirmation');
            $data['password'] =  bcrypt( $request->password );
            
        }else{
            $data =$request->except('password_confirmation','password');
        }
       
        $data['days'] =  json_encode( $request->days );
       
        if($request->image){
            $image_new_name=$this->SaveFile('public/uploads/image_files',$request->image);
            $data['image']=$image_new_name;
        }

        if($request->attachment){
            $attachment_new_name=$this->SaveFile('public/uploads/image_files',$request->attachment);
            $data['attachment']=$attachment_new_name;
        }

        $doctor = Doctor::findorfail($id);

       return  $doctor->update($data);
    }
    
    public function destroy($id)
    {
        Doctor::findorfail($id)->delete();

    }

}