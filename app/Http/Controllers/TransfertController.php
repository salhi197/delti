<?php

namespace App\Http\Controllers;

use App\Requete;
use App\Transfert;
use Illuminate\Http\Request;

class TransfertController extends Controller
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
        $requete->state = 'transfere';
        $requete->save();
        $transfert = new Transfert();
        $transfert->requete = $requete->id;
        $transfert->message = $request['message_transfert'];
        if($request->file('piece_transfert')){
            try {
                $path = $request->file('piece_transfert')->store('/pieces');                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $transfert->piece = $path;
        }
        $transfert->user = $request['user_transfert'];
        $transfert->save();
        return redirect()->back()->with('success', 'Enovyé avec succés ');        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function show(Transfert $transfert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function edit(Transfert $transfert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transfert $transfert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transfert  $transfert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transfert $transfert)
    {
        //
    }
}
