<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'label','source','numero','type_en','type_ar'
    ];


    public function getSubs()
    {
        $subs = Souscategorie::where('categorie',$this->id)->get();   
        return $subs;     
    } 
}
