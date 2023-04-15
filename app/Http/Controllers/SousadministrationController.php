<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Commune;
use App\Sousadministration;
use App\Administration;
use App\Sub;
use Response;
use Illuminate\Http\Request;


class SousadministrationController extends Controller
{
 
    public function index()
    {
        $sousadministrations = Sousadministration::all();
        $administrations = Administration::all();
        return view('sousadministrations.index',compact('administrations','sousadministrations'));
    }

    public function store(Request $request)
    {
        $sousadministration = new Sousadministration([
            'label' => $request['label'],
            'administartion' => $request['administration'],
        ]);
        $sousadministration->save();    
        return redirect()->route('sousadministration.index')->with('success', 'inserted successfuly ! ');
    }
    public function destroy($sousadministration)
    {
        $sousadministration = Sousadministration::find($sousadministration);
        $sousadministration->delete();
        return redirect()->route('sousadministration.index')
            ->with('success', 'supprimé avec succé !');
    }
    /**
     * 
     */

    public function update(Request $request,$sousadministration_id)
    {
        $sousadministration = Sousadministration::find($sousadministration_id);
        $sousadministration->label = $request['label'];
        // $sousadministration->icon = $request['icon'];
        $sousadministration->save();
        return redirect()->route('sousadministration.index')->with('success', 'edited  successfuly ! ');
   }
}
