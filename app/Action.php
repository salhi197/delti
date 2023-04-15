<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $fillable = [

        'label',
        'numero',
        'type_ar',
        'type_en'
    ];

}
