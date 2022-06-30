<?php
namespace  Modules\Front\repositories;

use Modules\Front\Entities\Patient;
Use Alert;
use Modules\Admin\traits\UploadFiles;

class PatientRepository {

    use UploadFiles;

    public function getAll(){
        
       return Patient::all();

       
    }

    public function store($request){
        
        $data =$request->except('password_confirmation');
        $data['password'] =  bcrypt( $request->password );

        if($request->image){
            $image_new_name=$this->SaveFile('public/uploads/image_files',$request->image);
            $data['image']=$image_new_name;
        }

      

     return   Patient::create($data);
       
    }


    public function find($id)
    {
        return  Patient::findorfail($id);
    }


    public function edit($id)
    {
        return  Patient::findorfail($id);
    }


    public function update($id,$request)
    {
        
        if($request->password){
            $data =$request->except('password_confirmation');
            $data['password'] =  bcrypt( $request->password );
            
        }else{
            $data =$request->except('password_confirmation','password');
        }
       
 
       
        if($request->image){
            $image_new_name=$this->SaveFile('public/uploads/image_files',$request->image);
            $data['image']=$image_new_name;
        }

     

        $Patient = Patient::findorfail($id);

       return  $Patient->update($data);
    }
    
    public function destroy($id)
    {
        Patient::findorfail($id)->delete();

    }

}