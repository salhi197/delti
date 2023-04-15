<?php

namespace App\Http\Controllers;

use App\Investissement;
use Illuminate\Http\Request;
use Mail;
use App\Commune;
use App\Requete;
use App\Daira;

use App\Wilaya;
use Auth;
use Illuminate\Support\Facades\Redirect;

class InvestissementController extends Controller
{
    public function retirer(Request $request)
    {
        $investissement = Investissement::find($request['investissement_id']);
        $investissement->motif = $request['motif'];
        $investissement->save();
        return redirect()->back()->with('success', 'La investissement a été retirée avec succés ');        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createClient()
    {
        $wilayas = Wilaya::all();
        $dairas = Daira::all();
        $communes = Commune::all();        
        return view('investissements.create_client',compact('wilayas','communes','dairas'));
    }
    public function client()
    {
        if(Auth::guard('client')->check()){
            $investissements = Investissement::where('client',Auth::guard('client')->user()->id)->get();
            return view('investissements.index',compact('investissements'));    
        }
        return redirect()->route('login.client');        
    }

     public function index()
    {
        if(Auth::guard('client')->check()){
            $investissements = Investissement::where('client',Auth::guard('client')->user()->id)->get();
            return view('investissements.index',compact('investissements'));    
        }
        return redirect()->route('login.admin')->with('success', ' inséré avec succés ');        

    }

    public function create()
    {
        $wilayas = Wilaya::all();
        $communes = Commune::all();
        return view('investissements.create2',compact('wilayas','communes'));//c,compact('categories','settings'));
    }


    public function createAr()
    {
        $wilayas = Wilaya::all();
        $communes = Commune::all();
        return view('investissements.create3',compact('wilayas','communes'));//c,compact('categories','settings'));
    }

    public function store(Request $request)
    {
        if(!Auth::guard('client')->check()){
            return Redirect::route('login.client');//->withInput()->with('error', 'Images Trés grande');                
        }

        $investissement = new Investissement();

        $investissement->wilaya = $request['wilaya'];
        $investissement->commune = $request['commune'];
        $investissement->daira = $request['daira'];
        $investissement->raison_social = $request['raison_social'];
        $investissement->status_juridique = $request['status_juridique'];
        $investissement->client = Auth::guard('client')->user()->id;
        $counter = Requete::where('wilaya',$request['wilaya'])->whereYear('daterequete',date('Y'))->count();
        $counter = $counter + Investissement::where('wilaya',$request['wilaya'])->whereYear('created_at',date('Y'))->count()+1;
        // dd('R'.substr( date('Y'), -2).$request['wilaya'].'R'.str_pad($counter, 6, '0', STR_PAD_LEFT));
        $investissement->code_initial = 'R'.substr( date('Y'), -2).$request['wilaya'].'W'.str_pad($counter, 6, '0', STR_PAD_LEFT);//paddy($('#numero').val(),6);        

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
        /**
         * 
         */
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
        return redirect()->route('investissement.index')->with('success', 'Enovyé avec succés ');        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investissement  $investissement
     * @return \Illuminate\Http\Response
     */
    public function show($investissement_id)
    {
        $investissement = Investissement::find($investissement_id);
        $wilayas = Wilaya::all();
        $communes = Commune::all();        
        return view('investissements.repondre',compact('investissement','wilayas','communes'));
    }

    public function edit($investissement_id)
    {
        $investissement = Investissement::find($investissement_id);
        $wilayas = Wilaya::all();
        $communes = Commune::all();        
        return view('investissements.edit_client',compact('investissement','wilayas','communes'));

    }

    public function repondre(Request $request, $investissement_id)
    {
        $investissement = Investissement::find($investissement_id);
        $investissement->reponse = $request['reponse'];
        $investissement->save();
        $data = [
            'subject' => 'Réponse sur la demande',
            'email'=>$investissement->email,
            'content'=>$request['reponse']
        ];
        Mail::send('repondre', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])
                ->subject('Demande D\'Investissement ');
        });                
        return redirect()->route('investissement.index')->with('success', 'Email Envoyé ');        

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investissement  $investissement
     * @return \Illuminate\Http\Response
     */
    public function destroy($investissement_id)
    {
        $investissement = Investissement::find($investissement_id);
        $investissement->delete();

        return redirect()->route('investissement.index')->with('success', 'Demande Annulée et un Email a été  Envoyé ');        

    }
}
