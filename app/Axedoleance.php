<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Axedoleance extends Model
{
    public function secteur()
    {
        return Secteur::find($this->secteur)['type'] ?? '';

    }   

    public function sujet()
    {
        return Sujetrequete::find($this->sujet)['type'] ?? '';

    }   

}
