<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soussouscategorie extends Model
{
    protected $fillable = [
        'label','categorie','souscategorie','source'

    ];

    public function categorie()
    {
        return Categorie::find($this->categorie)['label'] ?? '';
    }

    public function souscategorie()
    {
        return Souscategorie::find($this->souscategorie)['label'] ?? '';
    }

}
