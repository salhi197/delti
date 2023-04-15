<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;
    protected $guard = 'client';

    // public function daira()
    // {
    //     return Daira::where('id',$this->daira)->first();
    // }


    public function wilaya()
    {
        return Wilaya::where('id',$this->wilaya)->first();//, 'daira', 'id');
    }

    
    public function commune()
    {
        return Commune::where('id',$this->commune)->first();//, 'daira', 'id');        
    }    

}
