<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sujetrequete extends Model
{
    public function secteur()
    {
        return Secteur::find($this->secteur)['type'] ?? '';
    }

    public function administration()
    {
        return Administration::find($this->administration)['type'] ?? '';
    }

    public function typerequete()
    {
        return Typerequete::find($this->typerequete)['type'] ?? '';
    }

}
