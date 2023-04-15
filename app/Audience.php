<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    public function SelectedOption($elt,$id)
    {
        if($elt == $id){
            return "selected";
        }
    }
    public function actione()
    {
        $action= Action::find($this->type);
        return $action['label'] ?? '';    
    }

    public function getadministration()
    {
        $administration = Administration::find($this->administration);
        return $administration['label'] ?? '';    
    }

    public function sujet()
    {
        return Sujetrequete::find($this->sujet)['type'] ?? '';
    }


    public function secteur()
    {
        $secteur = Secteur::find($this->secteur);
        return $secteur['type'] ?? '';    
    }
    public function client()
    {
        $client = Client::find($this->client);
        return $client;
    }

    public function charger()
    {
        $user = User::find($this->charge_audience);
        return $user;
    }
    public function wilaya()
    {
        $wilaya = Wilaya::find($this->wilaya);
        return $wilaya;
    }

}
