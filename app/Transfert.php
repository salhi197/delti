<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfert extends Model
{
    public function user()
    {
        return User::find($this->user)['prenom'] ?? User::find($this->user)['nom'];
    }

}
