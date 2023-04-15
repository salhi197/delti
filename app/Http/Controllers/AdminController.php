<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Doleance;
use App\Suggestion;
use App\Client;
use App\Requete;
use Carbon\Carbon;


class AdminController extends Controller
{

    public function admin()
    { 
        if(Auth::guard('admin')->check()){
            $countdoleances = Doleance::count();
            $countrequetes = Requete::count();
            $newrequetes = Requete::where('categorie',6)->get()->count();
            $totalclients = Client::count();
            $requetes_list = Requete::whereYear('created_at', Carbon::now()->year)
                                ->select(DB::raw("MONTH(created_at) month"),DB::raw("count('month') as requetes"))
                                    ->groupby('month')
                                    ->get();
            // dd($requetes_list[0]['month']);  
            $countrequetes = [];
            $requetesthismonth = Requete::whereYear('created_at', Carbon::now()->year)
                                ->whereMonth('created_at',date('Y'))
                                    ->get()
                                    ->count();
            $requetesthisweek=Requete::where('created_at', '>', Carbon::now()->startOfWeek())
                                    ->where('created_at', '<', Carbon::now()->endOfWeek())
                                    ->get()
                                    ->count();
            $lastrequetes = Requete::orderBy('created_at','desc')->take(10)->get();

            foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $month){
            $countrequetes = Requete::whereYear('created_at', Carbon::now()->year)
                                ->whereMonth('created_at',$month)
                                    ->get()
                                    ->count();
                $requetsmensuel[$month] = $countrequetes;
            }
            foreach([1,2,3,4,5,6,7,8,9,10,11,12] as $month){
                $countsuggestions = Suggestion::whereYear('created_at', Carbon::now()->year)
                                    ->whereMonth('created_at',$month)
                                        ->get()
                                        ->count();
                    $suggestionmensuel[$month] = $countsuggestions;
                }
    
            return view('admin',compact('lastrequetes','countdoleances','countrequetes','newrequetes','suggestionmensuel','requetsmensuel','totalclients','requetesthismonth','requetesthisweek'));
            // return redirect()->route('investissement.index');
        }else{
            return redirect()->route('login.admin');
        }
    }

    public function wilayas()
    { 
        return view('wilayas');
    }

    
}
