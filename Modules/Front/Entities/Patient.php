<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Doctor\Entities\Doctor;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Modules\Admin\Entities\Appointment;
use Modules\Doctor\Entities\Category;


class Patient extends Model implements AuthenticatableContract
{
    use Authenticatable;

    // use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Front\Database\factories\PatientFactory::new();
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'doctor_patients','patient_id','doctor_id');
    }

    public function appointements(){
        return $this->hasMany(Appointment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
