<?php

namespace App\Http\Controllers;

use App\Attribution;
use App\Requete;
use Illuminate\Http\Request;

class AttributionController extends Controller
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
        $attribution = new Attribution();
        $attribution->requete = $requete_id;
        $attribution->message = $request['message_attr'];
        if($request->file('piece_attr')){
            $extension = $request->file('piece_attr')->extension();
            if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
            }

            $mime = $request->file('piece_attr')->getMimeType();
            if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                return Redirect::back()->withInput()->with('error', 'File Format not aattrepted');                
            }
            $size = $request->file('piece_attr')->getSize();  
            if($size>10485760){
                return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
            }
            try {
                $path = $request->file('piece_attr')->store('/piece_attrs');                
                $filename = $request->file('piece_attr')->getClientOriginalName();
                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $attribution->piece = $path;
        }        
        $attribution->user = $request['user_attr'];
        $attribution->save();
        return redirect()->back()->with('success', 'Enovyé avec succés ');        

    }

    public function show(Attribution $attribution)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribution $attribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attribution $attribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribution $attribution)
    {
        //
    }
}
