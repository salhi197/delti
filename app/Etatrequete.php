<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etatrequete extends Model
{

    public function souscategorie()
    {
        return Souscategorie::find($this->souscategorie)['label'] ?? '';
    }

    /**
     * 
     */
    
    public function categorie()
    {
        return Categorie::find($this->categorie)['label'] ?? '';
    }    
}
