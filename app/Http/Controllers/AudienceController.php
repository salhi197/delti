<?php

namespace App\Http\Controllers;

use App\Action;
use App\Administration;
use App\Audience;
use App\User;
use App\Wilaya;
use Illuminate\Support\Facades\Redirect;
use App\Requete;
use App\Categorie;
use App\Daira;
use App\Secteur;
use App\Client;
use App\Commune;
use App\Sourceaudience;
use App\Sourcerequete;
use App\Souscategorie;
use App\Sujetrequete;
use App\Typerequete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AudienceController extends Controller
{
    public function indexState($state)
    {
        $categorie = Categorie::find($state);
        $audiences = Audience::where('action',$state)->orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        return view('audiences.index',compact('audiences','wilayas','categorie'));
    }

    public function index()
    {
        $audiences = Audience::all();
        $wilayas = Wilaya::all();
        return view('audiences.index',compact('audiences','wilayas'));
    }


    public function create()
    {
        $clients = Client::all();
        $actions = Action::all();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $souscategories = Souscategorie::all();
        $sourceaudiences = Sourceaudience::all();      
        $secteurs= Secteur::orderBy('numero','asc')->get();
        $wilayas = Wilaya::orderBy('numero','asc')->get();

        $administrations = Administration::all();  
        $users = User::all();
        return view('audiences.create',compact('souscategories','clients','users','secteurs','administrations','actions','wilayas','sourceaudiences'));
    }



    public function storeTransfer(Request $request)
    {
        $data = array();
        foreach(explode('&', $request['data']) as $value){
            $value1 = explode('=', $value);
            $data[$value1[0]] = $value1[1];
        }        
        $audience = new Audience();
        $check = false;
        /////////////////////
        // dd(isset($data['audience_id']));
        if(isset($data['audience_id'])==true){
            $audiences = Audience::where('wilaya',$data['wilaya'])->where('id','<>',$data['audience_id'])->get();
        }else{
            $audiences = Audience::where('wilaya',$data['wilaya'])->get();
        }
        foreach ($audiences as $audience) {
            $code = substr($audience->code_initial,-6);
            dump($code,str_pad($data['numero'], 6, "0", STR_PAD_LEFT));
            if($code==str_pad($data['numero'], 6, "0", STR_PAD_LEFT)){
                return response()->json(['audience' => "Meme numero dans la meme wilaya"]);    
            }
        }
        $audience->sujet = $data['sujet'];
        $audience->type = $data['type'];
        $audience->date_audience = $data['date_audience'];
        $audience->charge_audience = $data['charge_audience'];
        $audience->code_initial = $data['code_initial'];
        $audience->client = $data['client'];
        $audience->details = $data['details'];
        $audience->secteur = $data['secteur'];
        $audience->wilaya = $data['wilaya'];
        $audience->administartion = $data['administration'];
        $audience->sousadministration = $data['sousadministration'];
        
        if($request->file('piece')){
            try {
                $path = $request->file('piece')->store('/pieces');                
                $filename = $request->file('piece')->getClientOriginalName();

            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $audience->piece = $path;//request['piece_jointe'];   
            $audience->filename = $filename;//request['piece_jointe'];   
        }
        $audience->save();

        return response()->json(['audience' => $audience['id']]);    

        // return redirect()->route('.index')->with('success', 'Inséré avec succés ');        
        // return view('requetes.create_from_audience',compact('audience'));

    }

    public function storeTransfer2(Request $request)
    {

        $data = array();
        foreach(explode('&', $request['data']) as $value){
            $value1 = explode('=', $value);
            $data[$value1[0]] = $value1[1];
        }
        
        $audience = new Audience();   
        $audience->sujet = $data['sujet'];
        $audience->type = $data['type'];
        $audience->date_audience = $data['date_audience'];
        $audience->charge_audience = $data['charge_audience'];
        $audience->code_initial = $data['code_initial'];

        $audience->client = $data['client'];
        $audience->details = $data['details'];
        // $audience->type = $data['type'];
        $audience->secteur = $data['secteur'];
        $audience->wilaya = $data['wilaya'];
        $audience->administartion = $data['administration'];
        $audience->sousadministration = $data['sousadministration'];
        if($request->file('piece')){
            try {
                $path = $request->file('piece')->store('/pieces');                
                $filename = $request->file('piece')->getClientOriginalName();

            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $audience->piece = $path;//request['piece_jointe'];   
            $audience->filename = $filename;//request['piece_jointe'];   
        }
        $audience->save();

        return response()->json(['audience' => $audience['id']]);    

        // return redirect()->route('.index')->with('success', 'Inséré avec succés ');        
        // return view('requetes.create_from_audience',compact('audience'));

    }

    public function store(Request $request)
    {

        $audiences = Audience::where('wilaya',$request['wilaya'])->get();
        foreach ($audiences as $audience) {
            $code = substr($audience->code_initial,-6);
            if($code==str_pad($request['numero'], 6, "0", STR_PAD_LEFT)){
                // return response()->json(['audience' => "Meme numero dans la meme wilaya"]);    
                return Redirect::back()->withInput()->with('error', 'Meme numero dans la meme wilaya');                
            }
        }
        $audience = new Audience();   
        // dd($request->file('piece'));
        $audience->sujet = $request['sujet'];
        $audience->type = $request['type'];
        $audience->sourceaudience = $request['sourceaudience'];
        $audience->code_initial = $request['code_initial'];
        $audience->date_audience = $request['date_audience'];
        $audience->charge_audience = $request['charge_audience'];
        $audience->numero = $request['numero'];
        $audience->wilaya = $request['wilaya'];
        $audience->client = $request['client'];
        $audience->details = $request['details'];
        $audience->secteur = $request['secteur'];
        $audience->administartion = $request['administration'];
        $audience->sousadministration = $request['sousadministration'];
        if($request->file('piece')){
            // dd("rrrrrrrrrrrrrrrrrr");
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
            // dd($path,
            // $filename);
            $audience->piece = $path;
            $audience->filename = $filename;

        }
        $audience->save();
        return redirect()->back()->with('success', 'Inséré avec succés ');        
    }


    public function update(Request $request,$audience_id)
    {
        $audience = Audience::find($audience_id);   
        $audience->sujet = $request['sujet'];
        $audience->type = $request['type'];
        $audience->code_initial    = $request['code_initial'];
        $audience->date_audience   = $request['date_audience'];
        $audience->charge_audience = $request['charge_audience'];
        $audience->numero          = $request['numero'];
        $audience->wilaya          = $request['wilaya'];
        $audience->client          = $request['client'];
        $audience->details         = $request['details'];
        $audience->secteur         = $request['secteur'];
        $audience->administartion = $request['administration'];
        $audience->sousadministration = $request['sousadministration'];
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
        if($request->file('piece2')){
            $extension = $request->file('piece2')->extension();
            if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
            }
            $mime = $request->file('piece2')->getMimeType();
            if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
            }
            $size = $request->file('piece2')->getSize();  
            if($size>10485760){
                return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
            }
            try {
                $path = $request->file('piece2')->store('/pieces');                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $audience->piece2 = $path;
        }

        $audience->save();
        return redirect()->route('audience.index')->with('success', 'Inséré avec succés ');        
    }

    public function filter(Request $request)
    {
        $date_fin="";
        $date_debut="";
        $_wilaya = "";
        // $_user = $request['user'];
        // $users = User::where('grade',3)->get();
        $result = Audience::query();
 
 
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
        $audiences = $result->get();
        $wilayas = Wilaya::all();

        return view('audiences.filter',compact('audiences','_wilaya','date_fin','date_debut','wilayas'));
 
 
    }    
    
    public function edit($id_audience)
    {
        $audience = Audience::find($id_audience);
        $clients = Client::all();
        $actions = Action::all();
        $wilayas = Wilaya::orderBy('numero','asc')->get();
        $souscategories = Souscategorie::all();
        $sourcerequetes = Sourcerequete::all();      

        $secteurs= Secteur::all();
        $administrations = Administration::all();  
        $users = User::all();//['ali','s','saz'];//Client::all();
        return view('audiences.edit',compact('audience','souscategories','clients','users','secteurs','administrations','actions','wilayas','sourcerequetes'));

    }


    public function destroy($id_requete)
    {
        $audience = Audience::find($id_requete);
        $audience->delete();
        return redirect()->route('audience.index');
    }

}
