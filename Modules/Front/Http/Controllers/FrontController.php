<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use  Modules\Doctor\repositories\DoctorRepository;
use Modules\Doctor\repositories\BlogRepository;
use Alert;
use Modules\Front\Entities\Contact;
use Modules\Doctor\Entities\Doctor;
use Modules\Doctor\Entities\Blog;
use Modules\Front\Entities\Patient;

use View;
class FrontController extends Controller
{
    // public function __constract(BlogRepository $BlogRepository){
    //     $shared_blogs = $BlogRepository->all()->take(3);
    //     View::share('shared_blogs', $shared_blogs);
    // }
    public function index(BlogRepository $BlogRepository,DoctorRepository $doctorrepositry)
    {
        $data=$this->NumberOf();
        $data['blogs']=$BlogRepository->all()->take(3);
        $data['doctors']=$doctorrepositry->getAll()->take(4);
        return view('front::index',compact('data'));
    }

  
    public function doctors(DoctorRepository $doctorrepositry)
    {
        $data=$this->NumberOf();
        $doctors = $doctorrepositry->getAll();

        return view('front::pages.doctors',compact('doctors','data'));
    }

   public function blogs(BlogRepository $BlogRepo)
   {
       $blogs=$BlogRepo->all();
       return view('front::pages.blogs',compact('blogs'));
   }

   public function SingleBlog($id,BlogRepository $BlogRepo)
   {
       $blog=$BlogRepo->find($id);
       return view('front::pages.single_blog',compact('blog'));
   }
   
   public function contact()
   {
       return view('front::pages.contact');
   }

   public function PostContact(Request $request)
   {
    Contact::create($request->only('name','email','subject','message'));
    Alert::success('SuccessAlert','Done Successfully');
    return redirect()->back();
   }

   public function about()
   {
        $data=$this->NumberOf();
       return view('front::pages.about',compact('data'));
   }


   public function services()
   {
        $data=$this->NumberOf();
       return view('front::pages.services',compact('data'));
   }
   
   public function NumberOf()
   {
    $data['number_of_doctors']=Doctor::count();
    $data['number_of_blogs']=Blog::count();
    $data['number_of_Patients']=Patient::count();
    return $data;
   }



   public function SingleDoctor($id,DoctorRepository $doctorrepositry)
   {
       $doctor=$doctorrepositry->find($id);
       return view('front::pages.single_doctor',compact('doctor'));
   }
   
  
}
