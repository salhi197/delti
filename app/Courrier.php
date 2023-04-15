<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courrier extends Model
{
    public function user()
    {
        return User::find($this->user)['prenom'] ?? User::find($this->user)['nom'];
    }
}
