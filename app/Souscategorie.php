<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscategorie extends Model
{
    protected $fillable = [
        'label','categorie','source'

    ];

    public function soussouscategories()
    {
        return Soussouscategorie::where('souscategorie',$this->id)->get();//;['label'] ?? '';
    }


    public function categorie()
    {
        return Categorie::find($this->categorie)['label'] ?? '';
    }
}
