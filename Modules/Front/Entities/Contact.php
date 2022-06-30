<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    // use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Front\Database\factories\ContactFactory::new();
    }
}
