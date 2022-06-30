<?php 

namespace  Modules\Doctor\repositories;
use Modules\Doctor\Entities\Blog;
use Modules\Admin\traits\UploadFiles;
use Auth;
class BlogRepository {

    use UploadFiles;

   private $blog;
   
   public function __construct(Blog $Blog)
   {
        $this->blog=$Blog;
   }

   public function all()
   {
       return $this->blog->with('doctor')->orderBy('id','desc')->get();
   }

   public function MyBlogs()
   {
       return $this->blog->where('doctor_id',Auth::guard('doctor')->user()->id)->get();
   }


   public function create($request)
   {
       $data=$request->all();
       $data['doctor_id']=Auth::guard('doctor')->user()->id;
        $data['image']=$this->SaveFile('public/uploads/image_files',$request->image);
        $this->blog->create($data);
   }

   public function find($id)
   {
    return $this->blog->findorfail($id);
   }

   public function update($id,$request)
   {
       
        $data=$request->all();
        $blog= $this->find($id);
        if($request->image)
        {
            $data['image']=$this->SaveFile('public/uploads/image_files',$request->image);
            $this->DeleteOldFile('public/uploads/image_files/',$blog->image);
        }
        $blog->update($data);
   }
   public function destroy($id)
   {
        $blog= $this->find($id);
        $this->DeleteOldFile('public/uploads/image_files/',$blog->image);
        $blog->delete();
   }

}