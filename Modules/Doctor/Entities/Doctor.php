<?php

namespace Modules\Doctor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Modules\Front\Entities\Patient;
use Modules\Doctor\Entities\Category;

class Doctor extends Model implements AuthenticatableContract
{
    // use HasFactory;
    use Authenticatable;

    protected $guarded = [];
    protected $appends = ['image_path'];
    
    protected static function newFactory()
    {
        return \Modules\Doctor\Database\factories\DoctorFactory::new();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function patients()
    {
        return $this->belongsToMany(Patient::class,'doctor_patients','doctor_id','patient_id');
    }

    public function getImagePathAttribute(){
      
        return asset('uploads/image_files/' . $this->image);
    }
}
