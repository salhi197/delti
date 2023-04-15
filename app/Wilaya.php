<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    protected $table = 'wilayas';

    public function dairas()
    {
        return Daira::where('wilaya',$this->id)->get();//, 'daira', 'id');
    }

    public function communes()
    {
        return Commune::where('wilaya',$this->id)->get();//, 'daira', 'id');
    }
}
