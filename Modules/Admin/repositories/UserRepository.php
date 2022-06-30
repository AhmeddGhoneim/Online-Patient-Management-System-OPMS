<?php
namespace  Modules\Admin\repositories;

use Modules\Admin\interfaces\UserInterface;
use App\Models\User;
Use Alert;

class UserRepository implements UserInterface {

    public function store($request)
    {
        $data=$request->except('_token','permissions','password_confirmation','company_id');
        $data['password']=bcrypt($request->password);
        $user=User::create($data);
        foreach($request->company_id as $id){
            $user->companies()->attach($id);
        }
        $user->attachRole('admin');
        if($request->permissions){
            $user->syncpermissions($request->permissions);
        }
        Alert::success('SuccessAlert','Done Successfully');
    }

    public function edit($id)
    {
       return $user=User::findorfail($id);
    }

    public function update($id,$request)
    {
        $data=$request->except('_token','permissions','password_confirmation','company_id','password');
        if($request->password){
            $data['password']=bcrypt($request->password);
        }
        $user=User::findorfail($id);
        $user->update($data);
        $user->companies()->sync($request->company_id);
        if($request->permissions){
            $user->syncpermissions($request->permissions);
        }
        Alert::success('SuccessAlert','Done Successfully');
        
    }

    public function destroy($id)
    {
        User::findorfail($id)->delete();
        Alert::success('SuccessAlert','Done Successfully');

    }


}