<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    public function administrations()
    {
        $administrations = Administration::where('secteur',$this->id)->get();   
        return $administrations;     
    } 

}
