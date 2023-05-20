<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Commune;
use App\Categorie;
use App\Souscategorie;
use App\Soussouscategorie;
use App\Rdv;
use App\Sub;
use Response;
use Illuminate\Http\Request;

class RdvController extends Controller
{
 
    public function index()
    {
        $rdvs = Rdv::where('user',Auth::user()->id)->get();
        return view('rdvs.index',compact('rdvs'));
    }

    public function store(Request $request)
    {   
        // dd('ssssssssssssssssssss');
        $rdv = new Rdv([
            'nom' => $request['nom'],
            'telephone' => $request['telephone'],
            'daterdv' => $request['daterdv'],
            'type' => $request['type'],
            'user'=>Auth::user()->id
        ]);
        $rdv->save();  
        return redirect()->back()->with('success', 'inserted successfuly ! ');

    }
    public function destroy($rdv)
    {
        $rdv = Ticket::find($rdv);
        $rdv->delete();
        return redirect()->back()
            ->with('success', 'supprimé avec succé !');
    }

    public function update(Request $request,$id_Ticket)
    {
        $rdv = Ticket::find($id_categorie);
        $rdv->label = $request['label_edit'];
        $rdv->type_en = $request['type_en_edit'];
        $rdv->type_ar = $request['type_ar_edit'];
        $rdv->numero = $request['numero_edit'];
        $rdv->save();
        return redirect()->back()->with('success', 'Modifié avecc Succés ! ');
   }
}
