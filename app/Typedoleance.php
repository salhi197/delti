<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typedoleance extends Model
{
    public function sujets()
    {
        $sujets = Sujetdoleance::where('typedoleance',$this->id)->get();
        return $sujets ; 
    }
}
