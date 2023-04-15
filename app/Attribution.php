<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribution extends Model
{
    public function user()
    {
        return User::find($this->user)['nom'] ?? '';
    }
}
