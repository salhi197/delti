<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $table = 'communes';


    public function daira()
    {
        return Daira::find($this->daira)['nom'] ?? '';
    }

    public function wilaya()
    {
        return Wilaya::find($this->wilaya)['name'];
    }
}
