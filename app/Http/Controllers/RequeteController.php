<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Affectation;
use App\Attribution;
use App\Audience;
use App\Commune;
use App\Wilaya;
use Carbon\Carbon;
use App\Investissement;
use Redirect;
use Auth;
use App\User;
use App\Requete;
use App\Categorie;
use App\Client;
use App\Courrier;
use App\Daira;
use App\Etatrequete;
use App\Secteur;
use App\Sourcerequete;
use App\Souscategorie;
use App\Sujetrequete;
use App\Transfert;
use App\Typerequete;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Auth;
class RequeteController extends Controller
{
    public function client()
    {
        if(Auth::guard('client')->check()){
            $requetes = Requete::where('client',Auth::guard('client')->user()->id)->get();
            return view('requetes.client',compact('requetes'));

        }else{
            return Redirect::route('login.client');//->withInput()->with('error', 'Images Trés grande');                
        }
    }
    public function new()
    {
        $requetes = Requete::where('categorie',6)->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('requetes.index',compact('requetes','wilayas'));
    }

    public function rejete()
    {
        $requetes = Requete::where('categorie',10)->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('requetes.index',compact('requetes','wilayas'));
    }

    public function indexState($state)
    {
        $categorie = Categorie::find($state);
        $requetes = Requete::where('categorie',$state)->orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('requetes.index',compact('requetes','wilayas','categorie'));
    }


    public function index()
    {
        $requetes = Requete::orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('requetes.index',compact('requetes','wilayas'));
    }


    public function createFromAudience($audience_id)
    {
        $clients = Client::orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $categories = Categorie::orderBy('numero','asc')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();
        $audience = Audience::find($audience_id);
        $client = client::find($audience->client);
        $communes = Commune::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $sujetrequetes= Sujetrequete::orderBy('numero','asc')->get();        
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $users = User::all();//'numero','asc')->get();  
        // dd($audience->code_initial);        
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();      
        return view('requetes.create_from_audience',compact('users','categories','clients','souscategories','etatrequetes','client','audience','audience_id','sourcerequetes','wilayas','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));
    }


    public function create()
    {
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $clients = Client::orderBy('numero','asc')->get();
        $users = User::all();//'numero','asc')->get();
        // $audience = Audience::find($audience_id);
        $communes = Commune::orderBy('numero','asc')->get();
        $categories = Categorie::where('source','requete')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $sujetrequetes= Sujetrequete::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $audiences = Audience::all();
        // dd($audiences);
        // dd($souscategories);     
        return view('requetes.create',compact('audiences','categories','users','souscategories','clients','etatrequetes','sourcerequetes','wilayas','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }


    public function createClient()
    {
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $clients = Client::orderBy('numero','asc')->get();
        $users = User::all();//'numero','asc')->get();
        // $audience = Audience::find($audience_id);
        $communes = Commune::orderBy('numero','asc')->get();
        $categories = Categorie::where('source','requete')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $sujetrequetes= Sujetrequete::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $audiences = Audience::all();
        // dd($audiences);
        // dd($souscategories);     
        return view('requetes.create_client',compact('audiences','categories','users','souscategories','clients','etatrequetes','sourcerequetes','wilayas','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }


    public function createInvest()
    {
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $clients = Client::orderBy('numero','asc')->get();
        $users = User::all();//'numero','asc')->get();
        // $audience = Audience::find($audience_id);
        $communes = Commune::orderBy('numero','asc')->get();
        $categories = Categorie::where('source','requete')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $sujetrequetes= Sujetrequete::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $audiences = Audience::all();
        // dd($audiences);
        // dd($souscategories);     
        return view('requetes.create_invest',compact('audiences','categories','users','souscategories','clients','etatrequetes','sourcerequetes','wilayas','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }


    public function store(Request $request)
    {        
        $requetes = Requete::where('wilaya',$request['wilaya'])->get();
        // dd($requetes);
        foreach ($requetes as $requete) {
            $code = substr($requete->code_initial,-6);
            if($code==str_pad($request['numero'], 6, "0", STR_PAD_LEFT)){
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
        }
        // dd('saz');
        if(!is_null($request['audience'])){
            $requete->audience = $request['audience'];
        }else{
            $requete->audience = Audience::where('code_initial',$request['code_audience'])->first()['id'];          
        }


        // dd($request);
        // dd($request['administration'],);
        $requete = new Requete();   
        $requete->wilaya = $request['wilaya'];
        $requete->daterequete = $request['daterequete'];
        $requete->state = 'new';
        $requete->daira = $request['daira'];
        $requete->client = $request['client'];
        $requete->commune = $request['commune'];
        $requete->invest = $request['invest'];
        /**
         * TEST
         */
        // dd($request['audience']);
        $requete->audience = $request['audience'];
        $requete->type_requete = $request['type_requete'];
        $requete->secteur = $request['secteur'];
        $requete->administration = $request['administration'];
        $requete->sousadministration = $request['sousadministration'];
        $requete->soussousadministration = $request['soussousadministration'];
        $requete->soussoussousadministration = $request['soussoussousadministration'];
        $requete->sujet = $request['sujet'];
        $requete->sourcerequete = $request['sourcerequete'];
        $requete->titre = $request['titre'];
        $requete->description = $request['description'];
        $requete->mots = $request['mots'];
        $requete->video = $request['video'];
        $requete->piece = $request['piece'];        
        $requete->code_initial = $request['code_initial'];        
        $requete->numero = $request['numero'];        
        $requete->codification = $request['codification'];        
        $requete->suivi_requete = $request['suivi_requete'];   


        $requete->categorie = $request['categorie'];   
        $requete->souscategorie = $request['souscategorie'];   
        $requete->soussouscategorie = $request['soussouscategorie'];   

        $requete->source = $request['source'];   
        // $requete->user = Auth::user()->id;
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
            $requete->piece = $path;
            $requete->filename = $filename;
        }        
        $requete->save();
        if($request['invest'] == "on"){
            $investissement = new Investissement();
            $investissement->raison_social = $request['raison_social'];
            $investissement->status_juridique = $request['status_juridique'];
            $investissement->nom_gerant = $request['nom_gerant'];
            $investissement->prenom_gerant = $request['prenom_gerant'];
            $investissement->telephone = $request['telephone'];
            $investissement->fax = $request['fax'];
            $investissement->mobile = $request['mobile'];
            $investissement->email = $request['email'];
            $investissement->secteur = $request['secteur'];
            $investissement->wilaya = $request['wilaya'];
            $investissement->daira = $request['daira'];
            $investissement->commune = $request['commune'];
            $investissement->activite = $request['activite'];
            $investissement->implimentation = $request['implimentation'];
            $investissement->Superficie = $request['Superficie'];
            $investissement->statut_du_foncier = $request['statut_du_foncier'];
            $investissement->etat_projet = $request['etat_projet'];
            $investissement->projet_exploitation = $request['projet_exploitation'];
            $investissement->date_projet_exploitation = $request['date_projet_exploitation'];
            $investissement->projet_exploitation = $request['projet_exploitation'];
            $investissement->date_permis_construction = $request['date_permis_construction'];
            $investissement->arret_creation = $request['arret_creation'];
            $investissement->date_arret_creation = $request['date_arret_creation'];
            $investissement->approbation = $request['approbation'];
            $investissement->date_approbation = $request['date_approbation'];
            $investissement->arret_exploitation = $request['arret_exploitation'];
            $investissement->adte_arret_exploitation = $request['adte_arret_exploitation'];
            $investissement->certficat = $request['certficat'];
            $investissement->date_certficat = $request['date_certficat'];
            $investissement->projet_exploitation = $request['projet_exploitation'];
            $investissement->date_projet_exploitation = $request['date_projet_exploitation'];
            $investissement->autorisation = $request['autorisation'];
            $investissement->date_autorisation = $request['date_autorisation'];
            $investissement->raccordement = $request['raccordement'];
            $investissement->date_raccordement = $request['date_raccordement'];
            $investissement->contraintes = $request['contraintes'];
            $investissement->permis_construction2 = $request['permis_construction2'];
            $investissement->date_permis_construction2 = $request['date_permis_construction2'];
            $investissement->arret_creation2 = $request['arret_creation2'];
            $investissement->date_arret_creation2 = $request['date_arret_creation2'];
            $investissement->taux = $request['taux'];
            $investissement->contraintes2 = $request['contraintes2'];
            $investissement->permis_construction3 = $request['permis_construction3'];
            $investissement->date_permis_construction3 = $request['date_permis_construction3'];
            $investissement->arret_creation3 = $request['arret_creation3'];
            $investissement->date_arret_creation3 = $request['date_arret_creation3'];
            $investissement->contraintes3 = $request['contraintes3'];
            $investissement->requete = $requete->id;
            
    
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
                $investissement->piece_jointe = $path;
            }
    
            $investissement->save();
    
        }
        return redirect()->route('requete.index')->with('success', 'Inséré avec succés ');        
    }


    
    public function storeClient(Request $request)
    {        

        if(!Auth::guard('client')->check()){
            return Redirect::route('login.client');//->withInput()->with('error', 'Images Trés grande');                
        }
        // dd('saz');

        // dd($request);
        // dd($request['administration'],);
        $requete = new Requete();   
        $requete->wilaya = $request['wilaya'];
        $requete->daterequete =Carbon::now()->format('Y-m-d');
        $requete->state = 'new';
        $requete->daira = $request['daira'];
        $requete->client = Auth::guard('client')->user()->id;
        $requete->commune = $request['commune'];
        $requete->invest = $request['invest'];
        $counter = Requete::where('wilaya',$request['wilaya'])->whereYear('daterequete',date('Y'))->count()+1;
        $requete->code_initial = 'R'.substr( date('Y'), -2).$request['wilaya'].'W'.str_pad($counter, 6, '0', STR_PAD_LEFT);//paddy($('#numero').val(),6);        
        $requete->type_requete = $request['type_requete'];
        $requete->secteur = $request['secteur'];
        $requete->administration = $request['administration'];
        $requete->sousadministration = $request['sousadministration'];
        $requete->soussousadministration = $request['soussousadministration'];
        $requete->soussoussousadministration = $request['soussoussousadministration'];
        $requete->sujet = $request['sujet'];
        $requete->sourcerequete = $request['sourcerequete'];
        $requete->titre = $request['titre'];
        $requete->description = $request['description'];
        $requete->mots = $request['mots'];
        $requete->video = $request['video'];
        $requete->piece = $request['piece'];        
        $requete->numero = $request['numero'];        
        $requete->codification = $request['codification'];        
        $requete->suivi_requete = $request['suivi_requete'];   


        $requete->categorie = 6;//$request['categorie'];   
        $requete->souscategorie = $request['souscategorie'];   
        $requete->soussouscategorie = $request['soussouscategorie'];   

        $requete->source = 10;//$request['source'];   
        // $requete->user = Auth::user()->id;
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
            $requete->piece = $path;
            $requete->filename = $filename;
        }        
        $requete->save();
        return redirect()->route('requete.index.client')->with('success', 'Inséré avec succés ');        
    }



    public function show($id_requete)
    {
        $produit = Requete::find($id_requete);
        return view('requetes.view',compact('produit'));
    }

    public function attribuer(Request $request,$id_requete)
    {
        $requete = Requete::find($id_requete);
        /**
         * 
         * 
         */
        // $requete->save();

        $requete->save();
        return redirect()->route('requete.index')->with('success', 'Inséré avec succés ');        
    }

    public function transferer(Request $request,$id_requete)
    {
        $requete = Requete::find($id_requete);
        $requete->administration = $request['administration'];
        // $requete->save();
        $requete->save();
        return redirect()->route('requete.index')->with('success', 'Inséré avec succés ');        
    }

    public function filter(Request $request)
    {
        $date_fin="";
        $date_debut="";
        $_wilaya = "";
        // $_user = $request['user'];
        // $users = User::where('grade',3)->get();
        $result = Requete::query();
 
 
        if (!empty($request['date_debut'])) {
            $date_debut=$request['date_debut'];    
            $result = $result->whereDate('daterequete', '>=', $request['date_debut']);
        }

        if (!empty($request['date_fin'])) {
            $date_fin=$request['date_fin'];    
            $result = $result->whereDate('daterequete', '<=', $request['date_fin']);
        }
        if (!empty($request['wilaya'])) {
            $_wilaya=$request['wilaya'];    
            $result = $result->where('wilaya', '=', $request['wilaya']);
        }
        $requetes = $result->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();

        return view('requetes.filter',compact('requetes','_wilaya','date_fin','date_debut','wilayas'));
 
 
    }
 

    public function editClient($id_requete)
    {
        $requete = Requete::find($id_requete);
        $investissement = Investissement::find($requete->investissement ?? '');
        $client = Client::find($requete->client);
        $clients = Client::orderBy('numero','asc')->get();
        $users = User::all();
        $delegues = User::where('type','delegue')->get();
        $categories = Categorie::where('source','requete')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();

        $communes = Commune::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();

        $sujetrequetes= Sujetrequete::orderBy('numero','asc')->get();        
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();      
        
        $attributions = Attribution::where('requete',$requete->id)->get();
        $affectations = Affectation::where('requete',$requete->id)->get();
        $transferts = Transfert::where('requete',$requete->id)->get();
        $courriers = Courrier::where('requete',$requete->id)->get();
        $ccs = Courrier::where(['requete'=>$requete->id,'source'=>'citoyen'])->get();
        
        $cms = Courrier::where('requete',$requete->id)->where('source','mediateur')->get();
        $css = Courrier::where('requete',$requete->id)->where('source','secteur')->get();
        $audiences = Audience::all();
        $audience = Audience::find($requete->audience);
        return view('requetes.edit_client',compact('audiences','audience','investissement','ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','requete','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }

    public function print($id_requete)
    {

        $requete = Requete::find($id_requete);
        return view('requetes.print');//,compact('audiences','audience','investissement','ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','requete','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));


    }

    public function edit($id_requete)
    {
        $requete = Requete::find($id_requete);
        $investissement = Investissement::find($requete->investissement ?? '');
        $client = Client::find($requete->client);
        $clients = Client::orderBy('numero','asc')->get();
        $users = User::all();
        $delegues = User::where('type','delegue')->get();
        $categories = Categorie::where('source','requete')->get();
        $souscategories = Souscategorie::orderBy('numero','asc')->get();

        $communes = Commune::orderBy('numero','asc')->get();
        $dairas = Daira::orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();

        $sujetrequetes= Sujetrequete::orderBy('numero','asc')->get();        
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();
        $typerequetes= Typerequete::orderBy('numero','asc')->get();
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $etatrequetes = Etatrequete::orderBy('numero','asc')->get();
        $administrations = Administration::orderBy('numero','asc')->get();  
        $sourcerequetes = Sourcerequete::orderBy('numero','asc')->get();      
        
        $attributions = Attribution::where('requete',$requete->id)->get();
        $affectations = Affectation::where('requete',$requete->id)->get();
        $transferts = Transfert::where('requete',$requete->id)->get();
        $courriers = Courrier::where('requete',$requete->id)->get();
        $ccs = Courrier::where(['requete'=>$requete->id,'source'=>'citoyen'])->get();
        
        $cms = Courrier::where('requete',$requete->id)->where('source','mediateur')->get();
        $css = Courrier::where('requete',$requete->id)->where('source','secteur')->get();
        
        $audiences = Audience::all();
        $audience = Audience::find($requete->audience);
        return view('requetes.edit',compact('audiences','audience','investissement','ccs','css','cms','categories','affectations','souscategories','wilayas','courriers','delegues','client','clients','transferts','attributions','requete','users','sourcerequetes','wilayas','etatrequetes','communes','dairas','sujetrequetes','sourcerequetes','typerequetes','secteurs','administrations'));//c,compact('categories','settings'));

    }

    
    public function update(Request $request,$requete_id)
    {
        $requete = Requete::find($requete_id);   
        $requete->wilaya = $request['wilaya'];
        $requete->daterequete = $request['daterequete'];
        $requete->state = 'new';
        $requete->daira = $request['daira'];
        $requete->client = $request['client'];
        $requete->commune = $request['commune'];
        $requete->invest = $request['invest'];
        $requete->audience = $request['audience'];
        $requete->type_requete = $request['type_requete'];
        $requete->secteur = $request['secteur'];
        $requete->administration = $request['administration'];
        $requete->sujet = $request['sujet'];
        $requete->sourcerequete = $request['sourcerequete'];
        $requete->titre = $request['titre'];
        $requete->description = $request['description'];
        $requete->mots = $request['mots'];
        $requete->video = $request['video'];
        $requete->piece = $request['piece'];        
        $requete->code_initial = $request['code_initial'];        
        $requete->numero = $request['numero'];        
        $requete->codification = $request['codification'];        
        $requete->suivi_requete = $request['suivi_requete'];   
        $requete->categorie = $request['categorie'];   
        $requete->souscategorie = $request['souscategorie'];   
        $requete->soussouscategorie = $request['soussouscategorie'];   
        $requete->source = $request['source'];   
        $requete->save();
        /**
         * 
         *  */                
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
        return redirect()->route('requete.index')->with('success', 'Modifié avec succés ');        
    }

    public function destroy($id_requete)
    {
        $requete = Requete::find($id_requete);
        $requete->delete();
        return redirect()->route('requete.index');
    }


    public function retirer(Request $request)
    {
        $requete = Requete::find($request['requete_id']);
        $requete->motif = $request['motif'];
        $requete->categorie = 10;//$request['motif'];
        $requete->save();// = $request['motif'];        
        // $requete->delete();
        // dd($requete);
        return redirect()->back()->with('success', 'La requete a été retirée avec succés ');        
    }


}
