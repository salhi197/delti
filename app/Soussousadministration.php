<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soussousadministration extends Model
{
    protected $fillable = [

        'label','administartion','soussousadministartion'

    ];

    public function soussoussousadministrations()
    {
        return Soussoussousadministration::where('soussousadministration',$this->id)->get();//['type'] ?? '';
    }

}
