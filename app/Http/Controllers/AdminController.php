<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Doleance;
use App\Suggestion;
use App\Client;
use App\Wilaya;
use App\Requete;
use Carbon\Carbon;


class AdminController extends Controller
{

    public function admin()
    { 
        $clients = Client::all();
        $wilayas = Wilaya::all();
        return view('clients.index',compact('clients','wilayas'));

    }

    public function wilayas()
    { 
        return view('wilayas');
    }

    
}
