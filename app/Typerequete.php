<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typerequete extends Model
{
    public function sujets()
    {
        $sujets = Sujetrequete::where('typerequete',$this->id)->get();
        return $sujets ; 
    }
}
