<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Doctor\Entities\Category;
use Modules\Doctor\Entities\Doctor;
use Modules\Front\Entities\Patient;


class Appointment extends Model
{
    // use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Admin\Database\factories\AppointmentFactory::new();
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
