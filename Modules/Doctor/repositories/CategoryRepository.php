<?php
namespace  Modules\Doctor\repositories;
use Modules\Doctor\Entities\Category;
use Alert;
class CategoryRepository {

    private $category;

    public function __construct()
    {
        $this->category= new Category();
    }
    public function all()
    {
       return $this->category->all();
    }

    public function create($request)
    {
        $this->category->create($request);
        Alert::success('SuccessAlert','Done Successfully');

    }

    public function find($id)
    {
       return $this->category->findorfail($id);
    }

    public function update($id,$request)
    {
        $category=$this->find($id);
        $category->update($request);
        Alert::success('SuccessAlert','Done Successfully');

    }

    public function destroy($id)
    {
        $this->category->findorfail($id)->delete();
        Alert::success('SuccessAlert','Done Successfully');

    }

   
}