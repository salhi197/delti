<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sujetdoleance extends Model
{
    public function secteur()
    {
        return Secteur::find($this->secteur)['type'] ?? '';
    }

    public function administration()
    {
        return Administration::find($this->administration)['type'] ?? '';
    }
    
    public function typedoleance()
    {
        return Typedoleance::find($this->typedoleance)['type'] ?? '';
    }

}
