<?php

namespace App\Http\Controllers;

use App\Privilege;
use App\Secteur;
use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }

    public function store(Request $request)
    {
        $role = new Role();   
        $role->nom_role = $request['nom_role'];
        $role->save();
        /**
        * 
        */
        $privilege = new Privilege();

        foreach([
            ['string','citoyen'],
            ['string','audience'],
            ['string','suggestion'],
            ['string','requete'],
            ['string','rapport'],
            ['string','bord'],
            ['string','courrier_citoyen'],
            ['string','courrier_mediateur'],
            ['string','courrier_secteur'],
            ['string','attributions'],
            ['string','transfert'],
            ['string','affectation_externe'],
            ['string','doleance'],
            ['string','calendrier']
        ] as $column){
            $privilege->{'create_'.$column[1]} = $request['create_'.$column[1]];
            $privilege->{'delete_'.$column[1]} = $request['delete_'.$column[1]];
            $privilege->{'read_'.$column[1]} = $request['read_'.$column[1]];

        }
        $privilege->role = $role->id;//();      

        $privilege->save();      

        return redirect()->route('role.index')->with('success', 'Inséré avec succés ');        

    }
    public function edit($role_id)
    {
        $role = Role::find($role_id);
        $privilege = Privilege::where('role',$role_id)->first();
        return view('roles.edit',compact('role','privilege'));        
    }

    public function create()
    {
        return view('roles.create');        
    }

    public function update(Request $request, $role_id)
    {
        $role = Role::find($role_id);   
        $role->nom_role = $request['nom_role'];
        $role->save();
        $privilege = Privilege::where('role',$role->id)->first();

        foreach([
            ['string','citoyen'],
            ['string','audience'],
            ['string','suggestion'],
            ['string','requete'],
            ['string','rapport'],
            ['string','bord'],
            ['string','courrier_citoyen'],
            ['string','courrier_mediateur'],
            ['string','courrier_secteur'],
            ['string','attributions'],
            ['string','transfert'],
            ['string','affectation_externe'],
            ['string','doleance'],
            ['string','calendrier']
        ] as $column){
            $privilege->{'create_'.$column[1]} = $request['create_'.$column[1]];
            $privilege->{'delete_'.$column[1]} = $request['delete_'.$column[1]];
            $privilege->{'read_'.$column[1]} = $request['read_'.$column[1]];

        }
        $privilege->role = $role->id;//();      

        $privilege->save();      

        
        return redirect()->route('role.index')->with('success', 'Inséré avec succés ');        

    }

    public function destroy($role_id)
    {
        $role = Role::find($role_id);   
        $role->delete();
        return redirect()->back()->with('success', 'Supprimé avec succés ');        

    }    
}
