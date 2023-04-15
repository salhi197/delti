<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Commune;
use App\Categorie;
use App\Souscategorie;
use App\Soussouscategorie;
use App\Action;
use App\Sub;
use Response;
use Illuminate\Http\Request;

class ActionController extends Controller
{
 
    public function index()
    {
        $actions =Action::all();
        return view('actions.index',compact('actions'));
    }

    public function store(Request $request)
    {
        $action = new Action([
            'label' => $request['label'],
            'numero' => $request['numero'],
            'type_ar' => $request['type_ar'],
            'type_en' => $request['type_en']
        ]);
        $action->save();    

        return redirect()->back()->with('success', 'inserted successfuly ! ');

    }
    public function destroy($action)
    {
        $action =Action::find($action);
        $action->delete();
        return redirect()->route('action.index')
            ->with('success', 'supprimé avec succé !');
    }
    /**
     * 
     */

    public function update(Request $request,$id_categorie)
    {
        $action =Action::find($id_categorie);
        $action->label = $request['label_edit'];
        $action->numero = $request['numero_edit'];
        $action->type_ar = $request['type_ar_edit'];
        $action->type_en = $request['type_en_edit'];
        $action->save();
        return redirect()->route('action.index')->with('success', 'Edited  successfuly ! ');
   }
}
