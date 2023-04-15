<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Affectation;
use App\Attribution;
use App\Audience;
use App\Commune;
use App\Wilaya;
use App\User;
use App\Doleance;
use Redirect;
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
class DoleanceController extends Controller
{
    public function createClient()
    {
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $clients = Client::orderBy('numero','asc')->get();
        $users = User::all();//'numero','asc')->get();
        $communes = Commune::orderBy('numero','asc')->get();
        $categories = Categorie::where('source','requete')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $sujetdoleances= Sujetdoleance::orderBy('numero','asc')->get();  
        
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $audiences = Audience::all();
        // dd($audiences);
        // dd($souscategories);     
        return view('doleances.create_client',compact('sujetdoleances','audiences','categories','users','souscategories','clients','wilayas','communes','dairas','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }

    public function client()
    {
        if(Auth::guard('client')->check()){
            $doleances = Doleance::where('client',Auth::guard('client')->user()->id)->get();
            return view('doleances.client',compact('doleances'));

        }else{
            return Redirect::route('login.client');//->withInput()->with('error', 'Images Trés grande');                
        }
    }


    public function new()
    {
        $doleances = Doleance::where('state','new')->get();
        return view('doleances.index',compact('doleances'));
    }


    public function indexState($state)
    {
        $categorie = Categorie::find($state);
        $doleances = Doleance::where('categorie',$state)->orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('doleances.index',compact('doleances','wilayas','categorie'));
    }
    
    public function index()
    {
        $doleances = Doleance::all();
        $wilayas = Wilaya::all();

        return view('doleances.index',compact('doleances','wilayas'));
    }


    public function createFromAudience($audience_id)
    {
        $clients = Client::all();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $categories = Categorie::all();
        $souscategories = Souscategorie::all();
        $audience = Audience::find($audience_id);
        $client = client::find($audience->client);
        $communes = Commune::all();
        $dairas = Daira::all();
        $sujetdoleances= Sujetdoleance::all();        
        $sourcerequetes = Sourcerequete::all();
        $typedoleances= Typedoleance::all();//'source','audience')->get();
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $users = User::all();  
        $sourcerequetes = Sourcerequete::all();      
        return view('doleances.create_from_audience',compact('users','categories','clients','souscategories','etatrequetes','client','audience','audience_id','sourcerequetes','wilayas','communes','dairas','sujetdoleances','sourcerequetes','typedoleances','secteurs','administrations'));//c,compact('categories','settings'));
    }


    public function create()
    {
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $clients = Client::all();
        $users = User::all();
        // $audience = Audience::find($audience_id);
        $communes = Commune::all();
        $categories = Categorie::where('source','doleance')->get();
        $souscategories = Souscategorie::all();
        $dairas = Daira::all();
        $sujetdoleances= Sujetdoleance::all();  
        $sourcerequetes = Sourcerequete::all();
        $typedoleances= TypeDoleance::all();
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $sourcerequetes = Sourcerequete::all();
        // dd($souscategories);     
        return view('doleances.create',compact('categories','users','souscategories','clients','etatrequetes','sourcerequetes','wilayas','communes','dairas','sujetdoleances','sourcerequetes','typedoleances','secteurs','administrations'));//c,compact('categories','settings'));

    }


    public function store(Request $request)
    {        
        $doleance = new Doleance();   
        $doleance->wilaya = $request['wilaya'];
        $doleance->datedoleance = $request['datedoleance'];
        $doleance->state = 'new';
        $doleance->daira = $request['daira'];
        $doleance->client = $request['client'];
        $doleance->commune = $request['commune'];
        $doleance->invest = $request['invest'];

        if(!is_null($request['audience'])){
            $doleance->audience = $request['audience'];
        }else{
            $doleance->audience = Audience::where('code_initial',$request['code_audience'])->first()['id'];          
        }
        $doleance->type_doleance = $request['type_doleance'];
        $doleance->secteur = $request['secteur_officiel'];
        $doleance->administration = $request['administration'];
        $doleance->sujet = $request['sujet'];
        $doleance->sourcedoleance = $request['sourcerequete'];
        $doleance->titre = $request['titre'];
        $doleance->description = $request['description'];
        $doleance->mots = $request['mots'];
        $doleance->video = $request['video'];
        $doleance->piece = $request['piece'];      
        $doleance->code_initial = $request['code_initial'];
        // $counter = Doleance::where('wilaya',$request['wilaya'])->whereYear('datedoleance',date('Y'))->count()+1;
        // $requete->code_initial = 'R'.substr( date('Y'), -2).$request['wilaya'].'W'.str_pad($counter, 6, '0', STR_PAD_LEFT);//paddy($('#numero').val(),6);        

        $doleance->numero = $request['numero'];        
        $doleance->codification = $request['codification'];        
        $doleance->suivi_doleance = $request['suivi_doleance'];   


        $doleance->categorie = $request['categorie'];   
        $doleance->souscategorie = $request['souscategorie'];   
        $doleance->soussouscategorie = $request['soussouscategorie'];   

        $doleance->source = $request['source'];   
        // dd();
        // $doleance->user = Auth::user()->id;
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
                $filename = $request->file('piece')->getClientOriginalName();

            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $doleance->piece = $path;
            $doleance->filename = $filename;
        }        
        $doleance->save();

        
        return redirect()->route('doleance.index')->with('success', 'Inséré avec succés ');        
    }


    public function storeClient(Request $request)
    {        

        // dd($request);
        // dd($request['administration'],);
        $doleance = new Doleance();   
        $doleance->wilaya = $request['wilaya'];
        $doleance->datedoleance = $request['datedoleance'];
        $doleance->state = 'new';
        $doleance->daira = $request['daira'];
        $doleance->client = Auth::guard('client')->user()->id;//$request['client'];
        $doleance->commune = $request['commune'];
        $doleance->invest = $request['invest'];

        $doleance->audience = $request['audience'];
        $doleance->type_doleance = $request['type_doleance'];
        $doleance->secteur = $request['secteur_officiel'];
        $doleance->administration = $request['administration'];
        $doleance->sujet = $request['sujet'];
        $doleance->sourcedoleance = $request['sourcerequete'];
        $doleance->titre = $request['titre'];
        $doleance->description = $request['description'];
        $doleance->mots = $request['mots'];
        $doleance->video = $request['video'];
        $doleance->piece = $request['piece'];      
        // $doleance->code_initial = $request['code_initial'];
        $counter = Doleance::where('wilaya',$request['wilaya'])->whereYear('datedoleance',date('Y'))->count()+1;
        $doleance->code_initial = 'D'.substr( date('Y'), -2).$request['wilaya'].'W'.str_pad($counter, 6, '0', STR_PAD_LEFT);//paddy($('#numero').val(),6);        

        $doleance->numero = $request['numero'];        
        $doleance->codification = $request['codification'];        
        $doleance->suivi_doleance = $request['suivi_doleance'];   


        $doleance->categorie = $request['categorie'];   
        $doleance->souscategorie = $request['souscategorie'];   
        $doleance->soussouscategorie = $request['soussouscategorie'];   

        $doleance->source = $request['source'];   
        // $doleance->user = Auth::user()->id;
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
                $filename = $request->file('piece')->getClientOriginalName();

            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $doleance->piece = $path;
            $doleance->filename = $filename;
        }        
        $doleance->save();
        return redirect()->route('doleance.index.client')->with('success', 'Inséré avec succés ');        
        }

    
    public function show($id_doleance)
    {
        $produit = Doleance::find($id_doleance);
        return view('doleances.view',compact('produit'));
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
        $doleances = $result->get();
        $wilayas = Wilaya::all();

        return view('dolean$doleances.filter',compact('dolean$doleances','_wilaya','date_fin','date_debut','wilayas'));
 
 
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

        $sujetdoleances= Sujetdoleance::all();//'source','doleance')->get();        
        $sourcerequetes = Sourcerequete::all();
        $typedoleances= Typedoleance::all();
        // dd($typedoleances);
        $secteurs= Secteur::all();
        $etatrequetes = Etatrequete::all();
        $administrations = Administration::all();  
        $sourcerequetes = Sourcerequete::all();      
        $audiences = Audience::all();
        $attributions =[];// Attribution::where('doleance',$doleance->id)->get();
        $affectations =[];// Affectation::where('doleance',$doleance->id)->get();
        $transferts =[];// Transfert::where('doleance',$doleance->id)->get();
        $courriers =[];// Courrier::where('doleance',$doleance->id)->get();
        $ccs =[];// Courrier::where(['doleance'=>$doleance->id,'source'=>'citoyen'])->get();
        
        $cms = [];// Courrier::where('doleance',$doleance->id)->where('source','mediateur')->get();
        $css = [];// Courrier::where('doleance',$doleance->id)->where('source','secteur')->get();
        return view('doleances.edit',compact('audiences','ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','doleance','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetdoleances','sourcerequetes','typedoleances','secteurs','administrations'));//c,compact('categories','settings'));

    }

    public function editClient($id_doleance)
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

        $sujetdoleances= Sujetdoleance::all();//'source','doleance')->get();        
        $sourcerequetes = Sourcerequete::all();
        $typedoleances= Typedoleance::all();
        // dd($typedoleances);
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
        return view('doleances.edit_client',compact('ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','doleance','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetdoleances','sourcerequetes','typedoleances','secteurs','administrations'));//c,compact('categories','settings'));

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
    public function print($id_doleance)
    {

        $doleance = Doleance::find($id_doleance);
        return view('doleances.print');//,compact('audiences','audience','investissement','ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','requete','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));


    }

    public function retirer(Request $request)
    {
        $doleance = Doleance::find($request['doleance_id']);
        $doleance->motif = $request['motif'];
        $doleance->save();
        return redirect()->back()->with('success', 'La doleance a été retirée avec succés ');        
    }

}
