<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    public function secteur()
    {
        return Secteur::find($this->secteur)['type'] ?? '';
    }

    public function sousadministrations()
    {
        return Sousadministration::where('administartion',$this->id)->get();//['type'] ?? '';
    }

    public function sujets()
    {
        return Sujetrequete::where('administration',$this->id)->get();//['type'] ?? '';
    }


}
