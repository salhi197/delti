<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sousadministration extends Model
{
    protected $fillable = [

        'label','administartion'

    ];

    public function soussousadministrations()
    {
        return Soussousadministration::where('sousadministration',$this->id)->get();//['type'] ?? '';
    }
}
