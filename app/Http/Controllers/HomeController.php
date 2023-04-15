<?php



namespace App\Http\Controllers;

use App\Client;
use App\Membre;
use App\Abonnement;
use App\Secteur;
use App\Administration;
use App\Commune;
use App\Wilaya;
use Hash;
use Mail;

use Auth;
use Carbon\Carbon;
use Storage;
use App\Setting;
use Illuminate\Http\Request;
use Redirect;

class HomeController extends Controller
{
    public function forget(Request $request)
    {
        $client = Client::where('email',$request['email'])->first();   


        if(is_null($client)){
            return redirect()->back()->with('success', 'Aucun Utilisateur avec cet email ');        
        }else{
            $code= mt_rand( 100000, 999999 );
            $client->password = Hash::make($code);
            $client->password_text = $code;
            $client->save();        
            $dataEmail = [
                'email' => $request['email'],
                'code' => $code
    
            ];

            Mail::send('forgetemail', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
                $message->to($dataEmail['email'])
                    ->subject('【Wassit】Code de connexion ');
            });                
            return redirect()->route('login.client')->with('success', 'Un nouveau code a été envoyé ');        
    
        }

    }

    public function forgetSubmit(Request $request)
    {
        $dataEmail = [
            'email' => $request['email']
        ];
        Mail::send('emailforget', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
            $message->to($dataEmail['email'])
                ->subject('【Wassit】Code de connexion ');
        });                

    }

    public function confirm(Request $request)
    {
        $client = Client::where('code',$request['code'])->first();
        if(is_null($client)){
            return redirect()->back()->with('error', 'Code Incorrect ');        
        }else{    
            Auth::logout();
            $client->email_verified = 1;
            $client->save();
            return redirect()->route('login.client')->with('success', 'Votre Email a été confirmé ');        
        }        
    }

    public function inscription()
    {

        if(Auth::guard('client')->check()){

            return Redirect::route('requete.create.client');//->withInput()->with('error', 'Images Trés grande');                
        }

        $wilayas = Wilaya::all();
        $communes = Commune::all();
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $administrations = Administration::all();
        $secteurs = Secteur::all();

        return view('inscription',compact('wilayas','communes','administrations','secteurs'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login/admin');  
    }

    /**
     * RAPPORT LIBRES
     */
    public function libres()
    {
        $benefice = Presence::where('type',1)->sum('prix');
        $libres = Presence::where('type',1)->get();
        $presences = Presence::all();
        return view('libres',compact('benefice','libres','presences'));
    }

    public function libresFilter(Request $request)
    {
        $date_debut= "";
        $date_fin= "";        
        $result = Presence::query();
        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('created_at', '>=', $request['date_debut']);
        }
        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('created_at', '<=', $request['date_fin']);
        }

        $benefice = $result->get()->where('type',1)->sum('prix');
        $libres = $result->get()->where('type',1);

        // $presences = Presence::all();
        return view('libres',compact('benefice','libres','date_debut','date_fin'));
    }


    /**
     * RAPPORT ASSURACES
     */
    public function assurances()
    {
        $assurances = Assurance::all();
        $assurancesSolde = Assurance::sum('prix');
        return view('assurances',compact(
            'assurances',
            'assurancesSolde'
        ));
    }

    public function assurancesFilter(Request $request)
    {
        $date_debut= "";
        $date_fin= "";        
        $result = Assurance::query();
        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('created_at', '>=', $request['date_debut']);
        }
        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('created_at', '<=', $request['date_fin']);
        }

        $assurancesSolde = $result->get()->sum('prix');
        $assurances = $result->get();

        return view('assurances',compact(
            'assurancesSolde',
            'assurances',
            'date_debut',
            'date_fin'          
        ));
    }


    public function activities()
    {
        $benefice = Presence::where('type',1)->sum('prix');
        $libres = Presence::where('type',1)->get();
        $presences = Presence::all();
        
        return view('activities',compact('benefice','libres','presences'));
    }




    public function FilterActivities(Request $request)
    {

        $result = Presence::query();
        $date_fin="";
        $date_debut="";
        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('created_at', '=', $request['date_debut']);
        }

        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('created_at', '<=', $request['date_fin']);
        }


        if (!empty($request['a'])) {
            $a=$request['a'];    
            $result = $result->where('activity', '=', $a);
        }
        $presences = $result->get();
        
        return view('activities',compact('benefice','libres','presences','date_debut'));
    }

    public function stats()
    {
        $presences = Presence::whereDate('created_at', Carbon::today())->get();

        $inscriptions = Inscription::all();//('created_at', Carbon::today())->get();
        $countInscriptions = count($inscriptions);

        $countDecharges = count(Decharge::all());
        $decharges = Decharge::all()->pluck('montant')->sum();

        $count_presences = count($presences);
        $inscriptions = Inscription::where('created_at', Carbon::today())->get();
        $membres = Membre::whereDate('created_at', Carbon::today())->get();
        $ouvertures = Ouverture::whereDate('created_at', Carbon::today())->get()->count();

        $libres = Presence::where('membre',null)->get();
        $beneficeLibres = Presence::where('membre',null)->sum('prix');
        

        $benefice = Inscription::all()->sum('total');
        
        $assurances = Assurance::get()->count();
        $assurancesSolde = Assurance::sum('prix');



        return view('stats',compact(
            'assurances',
            'assurancesSolde',
            'beneficeLibres',
            'presences',
            'membres',
            'countDecharges',
            'presences',
            'count_presences',
            'inscriptions',
            'ouvertures',
            'libres',
            'countInscriptions',
            'benefice',
            'decharges'
        ));    

    }

    public function fix()
    {
        $inscriptions = Inscription::all();
        foreach ($inscriptions as $inscription) {
            $abonnement= Abonnement::find($inscription->abonnement);
            $inscription->total = $abonnement->tarif;
            $inscription->save();
        }
    }

    public function statsFilter(Request $request)
    {
        $result = Inscription::query();
        $result2 = Presence::query();
        $result3 = Membre::query();
        $result4 = Assurance::query();
        $result5 = Decharge::query();

        $date_fin="";
        $date_debut="";

        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('created_at', '>=', $request['date_debut']);
            $result2 = $result2->whereDate('created_at', '>=', $request['date_debut'])->where('membre',null);
            $result4 = $result4->whereDate('created_at', '>=', $request['date_debut']);
            $result5 = $result5->whereDate('created_at', '>=', $request['date_debut']);
            $result3 = $result3->whereDate('created_at', '>=', $request['date_debut']);//->where('assurance',1);
        }

        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('created_at', '<=', $request['date_fin']);
            $result4 = $result4->whereDate('created_at', '<=', $request['date_fin']);
            $result5 = $result5->whereDate('created_at', '<=', $request['date_fin']);
            $result2 = $result2->whereDate('created_at', '<=', $request['date_fin'])->where('membre',null);
            $result3 = $result3->whereDate('created_at', '<=', $request['date_fin']);//->where('assurance',1);
  
        }

        $inscriptions = $result->get();
        $countInscriptions = count($inscriptions);
        $libres = $result2->get();
        $assurance = count($result3->get());

        $totalAssurance = $assurance*1000;

        $libres = $result2->get();//Presence::where('type',1)->get();
        $beneficeLibres = $result2->get()->sum('prix');
        $countLibre = count($libres);

        $benefice = $result->get()->sum('total');
        $nombreInscriptions = count($inscriptions);
        $assurancesSolde = $result4->get()->sum('prix');
        $assurances = count($result4->get());

        $countDecharges = count($result5->get());
        $decharges      = $result5->get()->sum('montant');

        return view('stats',compact('inscriptions',
            'date_debut',
            'assurances',
            'libres',
            'assurancesSolde',
            'date_fin',
            'beneficeLibres',
            'countDecharges',
            'decharges',
            'assurance',
            'countLibre',
            'totalAssurance',
            'benefice',
            'countInscriptions'
        ));

    }
    public function clear()
    {
        Storage::put('records.txt', '');
        return redirect()->route("setting.index")->with('success', 'success');                

    }



    public function format()
    {
        Membre::truncate();
        Inscription::truncate();
        Ouverture::truncate();
        Presence::truncate();
        Assurance::truncate();
        Decharge::truncate();
        Setting::truncate();
        return redirect()->route("home")->with('success', 'success');                

    }



    public function write(Request $request)
    {
        if($request->ajax()){
            Storage::put('logs.txt', '0');
            return response()->json(['error' => 0]);
        }
        
    }



    public function write2(Request $request)
    {
        if($request->ajax()){
            Storage::put('logs2.txt', '0');
            return response()->json(['error' => 0]);
        }
        
    }

    public function activity(Request $request)
    {
        $setting = Setting::where('titre','activity')->first();
        $setting->value = $request['dz'];
        $setting->save();
        return redirect()->back()->with('success', 'success');                
    }

    public function rapport()
    {
        $abonnements = Abonnement::all();        
        $inscriptions = Inscription::all();        
        $benefice = Inscription::all()->sum('total');
        $libres = Presence::where('type',1)->get();
        $assurance = Membre::where('assurance',1)->get()->count();
        $assurance = $assurance*1000;  
        return view('rapport',compact('inscriptions','abonnements','benefice','libres','assurance'));
    }

    public function filter(Request $request)
    {
        $result = Inscription::query();
        $result2 = Presence::query();
        $date_fin="";
        $date_debut="";

        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('created_at', '>=', $request['date_debut']);
            $result2 = $result2->whereDate('created_at', '>=', $request['date_debut']);
        }

        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('created_at', '<=', $request['date_fin']);
            $result2 = $result2->whereDate('created_at', '<=', $request['date_debut']);   
        }

        $inscriptions = $result->get();
        $libres = $result2->get();
        $benefice = $result->get()->sum('total');
        $nombreInscriptions = count($inscriptions);
        $assurance = Membre::where('assurance',1)->get()->count();
        $assurance = $nombreInscriptions*1000;
        return view('rapport',compact('inscriptions',
            'date_debut',
            'assurance',
            'libres',
            'date_fin',
            'benefice',
            'nombreInscriptions'
        ));

    }

    public function search(Request $request)
    {

        $wheres = "";
        $index = 0;
        $type = "";
        $debut_entre = "";
        $fin_entre ="";
        if($request['table']){
            $table = $request['table'];
            $categorie = $request['categorie'];
            
            if ($table == 'fournisseurs') {
                $sql ="select * from $table where id in (select fournisseur from categoriquements where categorie='$categorie')";
                $fournisseurs = DB::select(DB::raw($sql));        
                return view('providers',compact('fournisseurs'));                    
            }else{
                $sql ="select * from $table where categorie='$categorie'";
                $produits = DB::select(DB::raw($sql));        
                return view('providers',compact('produits'));    
            }
        }



    }



}

