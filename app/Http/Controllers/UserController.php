<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
use App\Commune;
use App\Administration;
use App\Secteur;
use App\Http\Requests\StoreUser;
use App\Privilege;
use App\Role;
use App\Wilaya;

class UserController extends Controller
{
    public function index()
    {
        $users =User::all();
        return view('users.index',compact('users'));
    }

    public function create()
    {
        $communes = Commune::all();
        $roles = Role::all();
        $wilayas = Wilaya::all();
        $administrations = Administration::all();
        $secteurs = Secteur::all();
        // if($type=="admin"){
        //     return view('users.create_admin',compact('wilayas','communes','administrations','secteurs'));
        // }
        // if($type=="assistant"){
        //     return view('users.create_assistant',compact('wilayas','communes','administrations','secteurs'));
        // }
        // if($type=="delegue"){
        //     return view('users.create_delegue',compact('wilayas','communes','administrations','secteurs'));
        // }
        return view('users.create',compact('roles','wilayas','communes','administrations','secteurs'));

    }

    public function createAdmin()
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $administrations = Administration::all();
        $secteurs = Secteur::all();
        return view('users.create_admin',compact('wilayas','communes','administrations','secteurs'));
    }

    public function createAssistant()
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $administrations = Administration::all();
        $secteurs = Secteur::all();
        return view('users.create_assistant',compact('wilayas','communes','administrations','secteurs'));
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->role = $request['role'];
        $user->secteur = $request['secteur'];
        $user->administration = $request['administration'];
        $user->dénomination = $request['dénomination'];
        $user->nom = $request['nom'];
        $user->prenom = $request['prenom'];
        $user->telephone = $request['telephone'];
        $user->email = $request['email'];
        $user->wilaya = $request['wilaya'];
        $user->fonction = $request['fonction'];
        $user->email = $request['email'];
        $user->username = $request['username'];
        $user->password = Hash::make($request['password']);
        $user->password_text = $request['password'];    
        // dd($request['username']);    
        // $user->type = $type;        
        $user->save();

        return redirect()->route('user.index')->with('success', 'Inséré avec succés ');
    }  

    public function storeCoach(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('name');
        $user->telephone = $request->get('telephone');
        // $user->activity = $request->get('activity');
        $user->grade = 3;
        $user->password = Hash::make($request->get('password'));
        $user->password_text = $request->get('password');
        try {
            $user->save();
            
        } catch (Exception $e) {
            dd('ezeze');
        }
        return redirect()->route('user.coachs')->with('success', 'un nouveau commercial a été inséré avec succés ');
    }  




    public function edit($id_user)
    {
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $user = User::find($id_user);
        return view('users.edit',compact('user','wilayas','communes'));
    }

    public function update(Request $request,$id_user)
    {
        $user = User::find($id_user);
        $user->name = $request->get('name');
        $user->isadmin = $request->get('grade');
        $user->email = $request->get('name');
        $user->password = Hash::make($request->get('password'));
        $user->password_text = $request->get('password');
        // $user->activity = $request->get('activity');

        $user->save();
        return redirect()->back()->with('success', ' ');

    }

    
    public function destroy($id_user)
    {
        $user = User::find($id_user);
        $user->delete();    
        return redirect()->route('user.index')->with('success', 'le  commercial a été supprimé ');
    }

}
