<?php

namespace Modules\Doctor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Auth;
use Modules\Doctor\repositories\CategoryRepository;
use Modules\Admin\Http\Requests\AdminDoctorRequest;
use Modules\Doctor\repositories\DoctorRepository;
use Alert;
class AuthController extends Controller
{

    public function login()
    {
        return view('doctor::login');
    }

    public function PostLogin(Request $request)
    {
        $data=$request->only('email','password');
        if(Auth::guard('doctor')->attempt($data)){
           return response()->json(['status'=>'doctor']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect()->route('doctor.login');
    }

    public function register(CategoryRepository $CategoryRepository)
    {
        $categories=$CategoryRepository->all();
        return view('doctor::register',compact('categories'));
    }

    public function PostRegister(AdminDoctorRequest $request,DoctorRepository $doctoreRepo)
    {
        $doctor = $doctoreRepo->store($request);
        Alert::success('SuccessAlert','Done Successfully');

        return redirect()->route('doctor.login');
    }
}
