<?php

namespace Modules\Doctor\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Doctor;
class Category extends Model
{
    // use HasFactory;

    protected $guarded = [];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Doctor\Database\factories\CategoryFactory::new();
    // }

    public function doctor()
    {
        return $this->hasMany(Doctor::class);
    }
}
