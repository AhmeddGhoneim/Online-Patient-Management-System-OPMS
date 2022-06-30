<?php
namespace  Modules\Admin\repositories;

use Modules\Admin\Entities\Company;
Use Alert;

class Companyrepository {

    public function store($request){
        $data=$request->only('phone','name');
        Company::create($data);
        Alert::success('SuccessAlert','Done Successfully');
       
    }

    public function edit($id)
    {
        return  $company=Company::findorfail($id);
    }


    public function update($id,$request)
    {
        $data=$request->only('phone','name');
        $company=Company::findorfail($id);
        $company->update($data);
        Alert::success('SuccessAlert','Done Successfully');
    }
    
    public function destroy($id)
    {
        Company::findorfail($id)->delete();
        Alert::success('SuccessAlert','Done Successfully');

    }

}