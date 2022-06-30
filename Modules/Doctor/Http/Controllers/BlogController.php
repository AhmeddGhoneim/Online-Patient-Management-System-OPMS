<?php

namespace Modules\Doctor\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Doctor\repositories\BlogRepository;
use Modules\Doctor\Http\Requests\BlogRequest;
use Alert;
use Yajra\DataTables\DataTables;
use Modules\Doctor\Http\Requests\UpdateBlogRequest;

class BlogController extends Controller
{
    private $BlogRepo;

    public function __construct(BlogRepository $BlogRepository)
    {
        $this->BlogRepo = $BlogRepository;
    }

    public function index()
    {
        return view('doctor::blogs.index');
    }

    public function create()
    {
        return view('doctor::blogs.create');
    }

    public function store(BlogRequest $request)
    {
        $this->BlogRepo->create($request);
        Alert::success('SuccessAlert','Done Successfully');
        return redirect()->route('doctor.blogs.index');
    }

    public function edit($id)
    {
        $blog =$this->BlogRepo->find($id);
        return view('doctor::blogs.edit',compact('blog'));
    }

    public function update($id,UpdateBlogRequest $request)
    {
        $this->BlogRepo->update($id,$request);
        Alert::success('SuccessAlert','Done Successfully');
        return redirect()->route('doctor.blogs.index');
    }

    public function destroy($id)
    {
        $this->BlogRepo->destroy($id);
        Alert::success('SuccessAlert','Done Successfully');
        return redirect()->route('doctor.blogs.index');
    }

    public function datatable()
    {
        $blogs = $this->BlogRepo->MyBlogs();
        
        return DataTables::of($blogs)
        ->addcolumn('title',function($row){
            return $row->title;
        })

        
        ->addcolumn('action',function($row){
           
                $edit='<a  href="' . route("doctor.blogs.edit" , $row->id ) . '"  class="btn btn-info rounded-pill btn-sm" disabled><i class="fa fa-edit"></i> Edit</a>' ;
                $delete='<a  href="' . route("doctor.blogs.destroy", $row->id ) . '"  class="btn btn-danger rounded-pill btn-sm" ><i class="fa fa-trash"></i> Delete</a>' ;
           

            return $edit . $delete ;
        })
        ->rawColumns(['action' => 'action','days'=>'days'])
        ->make(true);
    }
}
