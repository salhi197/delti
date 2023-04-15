<?php

namespace App\Http\Controllers;

use App\Affectation;
use App\Requete;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$requete_id)
    {
        $requete = Requete::find($requete_id);
        $requete->save();
        $affectation = new Affectation();
        $affectation->secteur = $request['secteur_affectation'];
        $affectation->requete = $requete_id;//$request['secteur_affectation'];
        $affectation->administration = $request['administration_affectation'];
        $affectation->message = $request['message_affectation'];        
        // if($request->file('piece_affectation')){
        //     try {
        //         $path = $request->file('piece_affectation')->store('/piece_affectations');                
        //         $filename = $request->file('piece_affectation')->getClientOriginalName();                
        //     } catch (Exception $e) {
        //         return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
        //     }
        //     $affectation->piece = $path;
        // }
        $affectation->save();
        return redirect()->back()->with('Success', 'Enovyé avec succés ');        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function show(Affectation $affectation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function edit(Affectation $affectation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affectation $affectation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affectation $affectation)
    {
        //
    }
}
