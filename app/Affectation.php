<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    public function getelt($elt)
    {
        if ($elt == 'client') {
            $client = Client::find($this->client);
            return $client['nom'] ?? '';     
        }
        if ($elt == 'wilaya') {
            $wilaya = Wilaya::find($this->wilaya);
            return $wilaya['name'] ?? '';    
        }

        if ($elt == 'commune') {
            $commune = Commune::find($this->commune);
            return $commune['name'] ?? '';    
        }
        if ($elt == 'daira') {
            $daira = Daira::find($this->daira);
            return $daira['nom'] ?? '';    
        }

        if ($elt == 'secteur') {
            $secteur = Secteur::find($this->secteur);
            return $secteur['type'] ?? '';    
        }

        if ($elt == 'administration') {
            $administration = Administration::find($this->administration);
            return $administration['type'] ?? '';    
        }
        if ($elt == 'sujet') {
            $sujetrequete = Sujetrequete::find($this->sujet);
            return $sujetrequete['type'] ?? '';    
        }

        if ($elt == 'typerequete') {
            $typerequete = Typerequete::find($this->type_requete);
            return $typerequete['type'] ?? '';    
        }
    }

    public function user()
    {
        return User::find($this->user)['nom'] ?? '';
    }

}