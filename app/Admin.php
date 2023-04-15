<?php

namespace App;

use App\Commande;

use App\Produit;

use App\Livreur;

use App\User;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Admin extends Authenticatable
{
    use Notifiable;
    /**
     * @var string
    */
    protected $guard = 'admin';

    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'email', 'password','password_text','solde'

    ];



    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];



}

