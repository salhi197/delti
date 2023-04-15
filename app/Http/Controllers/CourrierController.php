<?php

namespace App\Http\Controllers;

use App\Courrier;
use App\Requete;
use Illuminate\Http\Request;

class CourrierController extends Controller
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
    public function store(Request $request,$requete_id,$source)
    {
        $requete = Requete::find($requete_id);
        $requete->save();
        $courrier = new Courrier();
        $courrier->requete = $requete_id;
        if($source=="mediateur"){
            $courrier->brouillon = $request['trash_cm'];
            $courrier->type = $request['type_courrier_cm'];
            $courrier->etat_courrier_depart = $request['etat_courrier_cm'];
            $courrier->correspondance = $request['date_correspendance_cm'];
            $courrier->envoi = $request['date_envoi_cm'];
            $courrier->secteur = $request['secteur_cm'];
            $courrier->administration = $request['administration_cm'];
            $courrier->piece = $request['piece_cm'];
            $courrier->message = $request['message_cm'];
        }
        if($source=="secteur"){

            $courrier->secteur = $request['secteur_cs'];
            $courrier->administration = $request['administration_cs'];
            $courrier->sousadministration = $request['sousadministration_cs'];
                        
            $courrier->brouillon = $request['trash_cs'];
            $courrier->type = $request['type_cs'];
            $courrier->etat_courrier_depart = $request['etat_courrier_cs'];
            $courrier->correspondance = $request['date_cs'];
            $courrier->envoi = $request['date_envoi_cs'];
            $courrier->secteur = $request['secteur_cs'];
            $courrier->administration = $request['administration_cs'];
            $courrier->piece = $request['piece_cs'];
            $courrier->message = $request['message_cs'];
            if($request->file('piece_cs')){
                $extension = $request->file('piece_cs')->extension();
                if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
                }
                $mime = $request->file('piece_cs')->getMimeType();
                if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not acsepted');                
                }
                $size = $request->file('piece_cs')->getSize();  
                if($size>10485760){
                    return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
                }
                try {
                    $path = $request->file('piece_cs')->store('/piece_css');                
                    $filename = $request->file('piece_cs')->getClientOriginalName();
                    
                } catch (Exception $e) {
                    return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
                }
                $courrier->piece = $path;
            }        


            
        }
        if($source=="citoyen"){
            $courrier->brouillon = $request['trash_cc'];
            $courrier->type = $request['type_cc'];
            $courrier->etat_courrier_depart = $request['etat_courrier_cc'];
            $courrier->correspondance = $request['date_cc'];
            $courrier->envoi = $request['date_envoi_cc'];
            $courrier->secteur = $request['secteur_cc'];
            $courrier->administration = $request['administration_cc'];
            $courrier->piece = $request['piece_cc'];
            $courrier->message = $request['message_cc'];
            if($request->file('piece_cc')){
                $extension = $request->file('piece_cc')->extension();
                if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
                }
                $mime = $request->file('piece_cc')->getMimeType();
                if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
                }
                $size = $request->file('piece_cc')->getSize();  
                if($size>10485760){
                    return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
                }
                try {
                    $path = $request->file('piece_cc')->store('/piece_ccs');                
                    $filename = $request->file('piece_cc')->getClientOriginalName();
                    
                } catch (Exception $e) {
                    return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
                }
                $courrier->piece = $path;
            }        
    
        }
        $courrier->source = $source;//$request['message_cc'];

        $courrier->save();
        return redirect()->route('requete.edit',['requete'=>$requete_id])->with('success', 'Enovyé avec succés ');        

    }


    public function update(Request $request,$courrier_id,$source)
    {
        $courrier = Courrier::find($courrier_id);
        if($source=="mediateur"){
            $courrier->brouillon = $request['trash_cm_edit'];
            $courrier->type = $request['type_courrier_cm_edit'];
            $courrier->etat_courrier_depart = $request['etat_courrier_cm_edit'];
            $courrier->correspondance = $request['date_correspendance_cm_edit'];
            $courrier->envoi = $request['date_envoi_cm_edit'];
            $courrier->secteur = $request['secteur_cm_edit'];
            $courrier->administration = $request['administration_cm_edit'];
            $courrier->piece = $request['piece_cm_edit'];
            $courrier->message = $request['message_cm_edit'];
        }
        if($source=="secteur"){
            // dd($request['administration_cs_edit']);
            $courrier->secteur = $request['secteur_cs_edit'];
            $courrier->administration = $request['administration_cs_edit'];
            $courrier->sousadministration = $request['sousadministration_cs_edit'];                        
            $courrier->brouillon = $request['trash_cs_edit'];
            $courrier->type = $request['type_cs_edit'];
            $courrier->etat_courrier_depart = $request['etat_courrier_cs_edit'];
            $courrier->correspondance = $request['date_cs_edit'];
            $courrier->envoi = $request['date_envoi_cs_edit'];
            $courrier->secteur = $request['secteur_cs_edit'];
            $courrier->administration = $request['administration_cs_edit'];
            $courrier->piece = $request['piece_cs_edit'];
            $courrier->message = $request['message_cs_edit'];
            if($request->file('piece_cs')){
                $extension = $request->file('piece_cs')->extension();
                if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
                }
                $mime = $request->file('piece_cs')->getMimeType();
                if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not acsepted');                
                }
                $size = $request->file('piece_cs')->getSize();  
                if($size>10485760){
                    return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
                }
                try {
                    $path = $request->file('piece_cs')->store('/piece_css');                
                    $filename = $request->file('piece_cs')->getClientOriginalName();
                    
                } catch (Exception $e) {
                    return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
                }
                $courrier->piece = $path;
            }        


            
        }
        if($source=="citoyen"){
            $courrier->brouillon = $request['trash_cc_edit'];
            $courrier->type = $request['type_cc_edit'];
            $courrier->etat_courrier_depart = $request['etat_courrier_cc_edit'];
            $courrier->correspondance = $request['date_cc_edit'];
            $courrier->envoi = $request['date_envoi_cc_edit'];
            $courrier->secteur = $request['secteur_cc_edit'];
            $courrier->administration = $request['administration_cc_edit'];
            $courrier->piece = $request['piece_cc_edit'];
            $courrier->message = $request['message_cc_edit'];
            if($request->file('piece_cc_edit')){
                $extension = $request->file('piece_cc_edit')->extension();
                if(in_array($extension,['jpg','pdf','jpeg','png'])==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
                }
                $mime = $request->file('piece_cc_edit')->getMimeType();
                if(in_array( $mime ,['application/pdf','image/jpeg','image/png','image/jpg'] )==false){
                    return Redirect::back()->withInput()->with('error', 'File Format not accepted');                
                }
                $size = $request->file('piece_cc_edit')->getSize();  
                if($size>10485760){
                    return Redirect::back()->withInput()->with('error', ' file limit exceeds the maximum');                
                }
                try {
                    $path = $request->file('piece_cc_edit')->store('/piece_cc_edits');                
                    $filename = $request->file('piece_cc_edit')->getClientOriginalName();
                    
                } catch (Exception $e) {
                    return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
                }
                $courrier->piece = $path;
            }        
    
        }
        // $courrier->source = $source;//$request['message_cc_edit'];

        $courrier->save();
        return redirect()->back()->with('success', 'Enovyé avec succés ');        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courrier  $courrier
     * @return \Illuminate\Http\Response
     */
    public function show(Courrier $courrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courrier  $courrier
     * @return \Illuminate\Http\Response
     */
    public function edit(Courrier $courrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courrier  $courrier
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courrier  $courrier
     * @return \Illuminate\Http\Response
     */
    public function destroy($courrier_id)
    {
        $courrier = Courrier::find($courrier_id);
        $courrier->delete();
        return redirect()->back()->with('success', 'Supprimé avec succés ');        


    }
}
