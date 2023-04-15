<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Wilaya;
use Carbon\Carbon;
use Hash;
use App\Reclamation;
use App\Categorie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ReclamationControllerAdmin extends Controller
{


    public function index()
    {
        $reclamations = Reclamation::all();//'user',Auth::user()->id)->get();
        return view('reclamations.admin.index',compact('reclamations'));
    }


    public function create()
    {
        $wilayas = Wilaya::all();
        $communes = Commune::all();
        return view('reclamations.create',compact('wilayas','communes'));//c,compact('categories','settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reclamation = new Reclamation();   
        $reclamation->wilaya = $request['wilaya'];
        $reclamation->commune = $request['commune'];
        $reclamation->daira = $request['daira'];
        $reclamation->type = $request['type'];
        $reclamation->user = Auth::user()->id;
        // $reclamation->organisation = $request['organisation'];
        $reclamation->title = $request['title'];
        $reclamation->description = $request['description'];
        $reclamation->video_link = $request['video_link'];
        $reclamation->subject = $request['subject'];
        $reclamation->public_subject = $request['public_subject'];
        $reclamation->interet = $request['interet'];
        
        

        $reclamation->save();
        
        return redirect()->route('reclamation.index')->with('success', 'Inséré avec succés ');        
    }

    
    public function show($id_produit)
    {
        $produit = Reclamation::find($id_produit);
        return view('reclamations.view',compact('produit'));
    }

    public function edit($id_produit)
    {
        $categories = Categorie::all();

        $produit = Reclamation::find($id_produit);
        return view('reclamations.edit',compact('communes','categories','produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$produit_id)
    {
        $produit = Reclamation::find($produit_id);  
        $produit->categorie = $request['categorie'];
        $produit->designation = $request['designation'];
        $produit->save();
        return redirect()->route('reclamation.index')->with('success', 'reservation inséré avec succés ');   
    }

    public function destroy($id_reclamation)
    {
        $reclamation = Reclamation::find($id_reclamation);
        $reclamation->delete();
        return redirect()->route('reclamation.index');
    }


}
