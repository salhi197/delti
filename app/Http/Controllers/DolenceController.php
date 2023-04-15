<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Attribution;
use App\Audience;
use App\Commune;
use App\Wilaya;
use App\User;
use App\Requete;
use App\Categorie;
use App\Client;
use App\Courrier;
use App\Daira;
use App\Dolence;
use App\Etatrequete;
use App\Secteur;
use App\Sourcerequete;
use App\Sujetrequete;
use App\Transfert;
use App\Typerequete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DoleanceController extends Controller
{

    public function index()
    {
        $doleances =Dolence::all();
        return view('doleances.index',compact('requetes'));
    }


    public function createFromAudience($audience_id)
    {
        $wilayas = Wilaya::all();
        $categories = Categorie::all();
        $souscategories = Categorie::all();
        $audience = Audience::find($audience_id);
        $client = client::find($audience->client);
        $communes = Commune::all();
        $dairas = Daira::all();
        $sujetrequetes= Sujetrequete::all();        
        $sourcerequetes = Sourcerequete::all();
        $typerequetes= Typerequete::all();
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $sourcerequetes = Sourcerequete::all();      
        return view('doleances.create_from_audience',compact('categories','souscategories','etatrequetes','client','audience','audience_id','sourcerequetes','wilayas','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));
    }


    public function create()
    {
        $wilayas = Wilaya::all();
        $clients = Client::all();

        // $audience = Audience::find($audience_id);
        $communes = Commune::all();
        $categories = Categorie::all();
        $souscategories = Categorie::all();
        $dairas = Daira::all();
        $sujetrequetes= Sujetrequete::all();  
        $sourcerequetes = Sourcerequete::all();
        $typerequetes= Typerequete::all();
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $sourcerequetes = Sourcerequete::all();      
        return view('doleances.create',compact('categories','souscategories','clients','etatrequetes','sourcerequetes','wilayas','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }


    public function store(Request $request)
    {        
        // dd($request);
        $doleance = new Requete();   
        $doleance->wilaya = $request['wilaya'];
        $doleance->state = 'new';
        $doleance->daira = $request['daira'];
        $doleance->client = $request['client'];
        $doleance->commune = $request['commune'];
        $doleance->audience = $request['audience'];
        $doleance->type_requete = $request['type_requete'];
        $doleance->secteur = $request['secteur'];
        $doleance->administration = $request['administration'];
        $doleance->sujet = $request['sujet'];
        $doleance->sourcerequete = $request['sourcerequete'];
        $doleance->titre_requete = $request['titre'];
        $doleance->description = $request['description'];
        $doleance->mots = $request['mots'];
        $doleance->video = $request['video'];
        $doleance->piece = $request['piece'];        
        $doleance->code_initial = $request['code_initial'];        
        $doleance->numero = $request['numero'];        
        $doleance->codification = $request['codification'];        
        $doleance->suivi_requete = $request['suivi_requete'];   
        $doleance->source = $request['source'];   
        // $doleance->user = Auth::user()->id;
        $doleance->save();
        if($request->file('piece')){
            try {
                $path = $request->file('piece')->store('/pieces');                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $doleance->piece_jointe = $path;
        }
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés ');        
    }

    
    public function show($id_requete)
    {
        $produit =Dolence::find($id_requete);
        return view('doleances.view',compact('produit'));
    }

    public function attribuer(Request $request,$id_requete)
    {
        $doleance =Dolence::find($id_requete);
        /**
         * 
         * 
         */
        // $doleance->save();

        $doleance->save();
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés ');        
    }

    public function transferer(Request $request,$id_requete)
    {
        $doleance =Dolence::find($id_requete);
        $doleance->administration = $request['administration'];
        // $doleance->save();
        $doleance->save();
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés ');        
    }

    public function filter(Request $request)
    {
         $date_fin="";
         $date_debut="";
         // $_user = $request['user'];
         // $users = User::where('grade',3)->get();
         $result = Audience::query();
 
 
         if (!empty($request['date_debut'])) {
             $date_debut=$request['date_debut'];    
             $result = $result->whereDate('date_versement', '>=', $request['date_debut']);
         }
 
         if (!empty($request['date_fin'])) {
             $date_fin=$request['date_fin'];    
             $result = $result->whereDate('date_versement', '<=', $request['date_fin']);
         }
         $audiences = $result->get();
 
         return view('audiences.filter',compact('audiences'));
 
 
    }
 

    public function edit($id_requete)
    {
        $doleance =Dolence::find($id_requete);
        $client = Client::find($doleance->client);
        $clients = Client::all();
        $users = User::all();
        $delegues = User::where('type','delegue')->get();
        
        $communes = Commune::all();
        $dairas = Daira::all();
        $wilayas = Wilaya::all();

        $sujetrequetes= Sujetrequete::all();        
        $sourcerequetes = Sourcerequete::all();
        $typerequetes= Typerequete::all();
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $sourcerequetes = Sourcerequete::all();      
        
        $attributions = Attribution::where('requete',$doleance->id)->get();
        $transferts = Transfert::where('requete',$doleance->id)->get();
        $courriers = Courrier::where('requete',$doleance->id)->get();
        return view('doleances.edit',compact('wilayas','courriers','delegues','client','clients','transferts','attributions','requete','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }



    public function destroy($id_requete)
    {
        $doleance =Dolence::find($id_requete);
        $doleance->delete();
        return redirect()->route('doleance.index');
    }


}
