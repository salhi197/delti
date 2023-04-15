<?php

namespace App\Http\Controllers;

use App\Suggestion;
use App\Administration;
use App\Affectation;
use App\Attribution;
use App\Audience;
use App\Commune;
use App\Wilaya;
use App\User;
use App\Doleance;
use App\Categorie;
use App\Client;
use App\Courrier;
use App\Sujetrequete;
use App\Typerequete;
use App\Daira;
use App\Etatrequete;
use App\Secteur;
use App\Sourcerequete;
use App\Souscategorie;
use App\Sujetdoleance;
use App\Transfert;
use App\Typedoleance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SuggestionController extends Controller
{

    public function new()
    {
        $suggestions = Doleance::where('state','new')->get();
        return view('suggestions.index',compact('suggestions'));
    }


    public function indexState($state)
    {
        $categorie = Categorie::find($state);
        $suggestions = Doleance::where('categorie',$state)->orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('suggestions.index',compact('suggestions','wilayas','categorie'));
    }
    
    public function index()
    {
        $suggestions = Suggestion::all();
        return view('suggestions.index',compact('suggestions'));
    }

    public function create()
    {
        return view('suggestions.create');
    }

    public function createClient()
    {
        $wilayas = Wilaya::all();
        $communes = Commune::all();
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $administrations = Administration::all();
        $secteurs= Secteur::orderBy('numero','asc')->get();

        return view('suggestions.create_client',compact('wilayas','communes','administrations','secteurs'));
    }


    public function store(Request $request)
    {        
        $suggestion = new Suggestion();   
        $suggestion->nom = $request['nom_s'];
        $suggestion->prenom = $request['prenom_s'];
        $suggestion->wilaya = $request['wilaya_s'];
        $suggestion->commune = $request['commune_s'];
        $suggestion->secteur = $request['secteur_s'];
        $suggestion->objet = $request['objet_s'];
        $suggestion->suggestion = $request['suggestion_s'];        
        $suggestion->save();        
        return redirect()->back()->with('success', 'Inséré avec succés ');        
    }

    
    public function show($id_doleance)
    {
        $produit = Doleance::find($id_doleance);
        return view('suggestions.view',compact('produit'));
    }

    public function attribuer(Request $request,$id_doleance)
    {
        $doleance = Doleance::find($id_doleance);
        /**
         * 
         * 
         */
        // $doleance->save();

        $doleance->save();
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés ');        
    }

    public function transferer(Request $request,$id_doleance)
    {
        $doleance = Doleance::find($id_doleance);
        $doleance->administration = $request['administration'];
        // $doleance->save();
        $doleance->save();
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés ');        
    }


    public function filter(Request $request)
    {
        $date_fin="";
        $date_debut="";
        $_wilaya = "";
        // $_user = $request['user'];
        // $users = User::where('grade',3)->get();
        $result = Doleance::query();
 
 
        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('date_audience', '>=', $request['date_debut']);
        }

        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('date_audience', '<=', $request['date_fin']);
        }
        if (!empty($request['wilaya'])) {
            $_wilaya=$request['wilaya'];    
            $result = $result->where('wilaya', '=', $request['wilaya']);
        }
        $suggestions = $result->get();
        $wilayas = Wilaya::all();

        return view('dolean$suggestions.filter',compact('dolean$suggestions','_wilaya','date_fin','date_debut','wilayas'));
 
 
    }        
 


    public function edit($id_doleance)
    {
        $doleance = Doleance::find($id_doleance);
        $client = Client::find($doleance->client);
        $clients = Client::all();
        $users = User::all();
        $delegues = User::where('type','delegue')->get();
        $categories = Categorie::where('source','doleance')->get();
        $souscategories = Souscategorie::all();

        $communes = Commune::all();
        $dairas = Daira::all();
        $wilayas = Wilaya::all();

        $sujetsuggestions= Sujetdoleance::all();//'source','doleance')->get();        
        $sourcerequetes = Sourcerequete::all();
        $typesuggestions= Typedoleance::all();
        // dd($typesuggestions);
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $sourcerequetes = Sourcerequete::all();      
        
        $attributions =[];// Attribution::where('doleance',$doleance->id)->get();
        $affectations =[];// Affectation::where('doleance',$doleance->id)->get();
        $transferts =[];// Transfert::where('doleance',$doleance->id)->get();
        $courriers =[];// Courrier::where('doleance',$doleance->id)->get();
        $ccs =[];// Courrier::where(['doleance'=>$doleance->id,'source'=>'citoyen'])->get();
        
        $cms = [];// Courrier::where('doleance',$doleance->id)->where('source','mediateur')->get();
        $css = [];// Courrier::where('doleance',$doleance->id)->where('source','secteur')->get();
        return view('suggestions.edit',compact('ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','doleance','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetsuggestions','sourcerequetes','typesuggestions','secteurs','administrations'));//c,compact('categories','settings'));

    }

    

    
    public function update(Request $request,$produit_id)
    {
        $produit = Doleance::find($produit_id);  
        $doleance->wilaya = $request['wilaya'];
        $doleance->datedoleance = $request['datedoleance'];
        $doleance->state = 'new';
        $doleance->daira = $request['daira'];
        $doleance->client = $request['client'];
        $doleance->commune = $request['commune'];
        $doleance->invest = $request['invest'];

        $doleance->audience = $request['audience'];
        $doleance->type_doleance = $request['type_doleance'];
        $doleance->secteur = $request['secteur'];
        $doleance->administration = $request['administration'];
        $doleance->sujet = $request['sujet'];
        $doleance->sourcerequete = $request['sourcerequete'];
        $doleance->titre = $request['titre'];
        $doleance->description = $request['description'];
        $doleance->mots = $request['mots'];
        $doleance->video = $request['video'];
        $doleance->piece = $request['piece'];        
        $doleance->code_initial = $request['code_initial'];        
        $doleance->numero = $request['numero'];        
        $doleance->codification = $request['codification'];        
        $doleance->suivi_doleance = $request['suivi_doleance'];   


        $doleance->categorie = $request['categorie'];   
        $doleance->souscategorie = $request['souscategorie'];   
        $doleance->soussouscategorie = $request['soussouscategorie'];   

        $doleance->source = $request['source'];   
        // $doleance->user = Auth::user()->id;
        $doleance->save();
        if($request->file('piece')){
            $extension = $request->file('piece')->extension();
            if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
            }
            $mime = $request->file('piece')->getMimeType();
            if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
            }
            $size = $request->file('piece')->getSize();  
            if($size>10485760){
                return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
            }
            try {
                $path = $request->file('piece')->store('/pieces');                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $audience->piece = $path;
        }        
        
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés '); 
    }

    public function destroy($id_doleance)
    {
        $doleance = Doleance::find($id_doleance);
        $doleance->delete();
        return redirect()->route('doleance.index');
    }


}
