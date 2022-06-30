<?php

namespace Modules\Doctor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Doctor\Entities\Doctor;
class Blog extends Model
{
    // use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Doctor\Database\factories\BlogFactory::new();
    }

    public function doctor()
    {
       return $this->belongsTo(Doctor::class);
    }
}
