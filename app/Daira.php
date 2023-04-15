<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    protected $table = 'dairas';
    
    public function wilaya()
    {
        return Wilaya::where('id',$this->wilaya)->first();//, 'daira', 'id');
    }

    public function communes()
    {
        return Commune::where('daira',$this->id)->get();//, 'daira', 'id');
    }
}
