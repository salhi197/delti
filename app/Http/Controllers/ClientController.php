<?php

namespace App\Http\Controllers;

use App\Administration;
use App\Client;
use Mail;
use Redirect;
use App\Commune;
use App\Secteur;
use App\Wilaya;
use Hash;
use DB;

use Auth;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function histo()
    {
        if(Auth::guard('client')->check()){
            return view('hsito');//,compact('client'));
        }else{
            return Redirect::route('login');
        }

    }

    public function dashboard()
    {
        if(Auth::guard('client')->check()){
            return view('dashboard');//,compact('client'));
        }else{
            return Redirect::route('login');
        }
    }

    public function count()
    {
        if(Auth::guard('client')->check()){
            return view('count');//,compact('client'));
        }else{
            return Redirect::route('login');
        }
    }


    public function profile()
    {
        if(Auth::guard('client')->check()){
            $client = Client::find(Auth::guard('client')->user()->id);
            return view('clients.profile',compact('client'));
        }else{
            return Redirect::route('login.client');
        }
    }

    public function profileUpdate(Request $request)
    {
        if(Auth::guard('client')->check()){
            return view('profile');
        }else{
            return Redirect::route('login.client');
        }
    }    
    public function index()
    {
        if(Auth::guard('admin')->check()){
            $clients = Client::all();
            $wilayas = Wilaya::all();
            return view('clients.index',compact('clients','wilayas'));
    
        }else{
            return Redirect::route('login.admin');
        }

    }


    public function create()
    {
        $wilayas = Wilaya::all();
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        // if($type=="citoyen"){
        //     return view('clients.create_citoyen',compact('wilayas','communes','administrations','secteurs'));
        // }
        // if($type=="association"){
        //     return view('clients.create_citoyen',compact('wilayas','communes','administrations','secteurs'));
        // }
        // if($type=="economic"){
        //     return view('clients.create_economic',compact('wilayas','communes','administrations','secteurs'));
        // }
        return view('clients.create',compact('wilayas','communes'));

    }

    public function inscription()
    {
        $client = new Client();
        $client->nom = $request['nom_c'];
        // if(in_array($extension,['citoyen','','',''])==false){
        // }
        $client->type = $request['type'];
        $client->prenom = $request['prenom_c'];
        $client->telephone = $request['telephone_c'];
        $client->email = $request['email_c'];
        $client->wilaya = $request['wilaya_c'];
        $client->commune = $request['commune_c'];
        $client->date_naissance = $request['date_naissance_c'];
        $client->piece_identite = $request['piece_identite_c'];
        $client->sexe = $request['sexe_c'];
        $client->date_delivrance = $request['date_delivrance_c'];
        $client->save();       
        return redirect()->route('client.index')->with('success', 'Inséré avec succés ');

    }


    public function storeTypecitoyen(Request $request)
    {
        do {
            $code= mt_rand( 100000, 999999 );
        } while ( DB::table( 'clients' )->where( 'code', $code )->exists() );

        // dd('saz');
        $client = new Client();
        $client->code = $code;
        $client->nom = $request['nom_c'];
        $client->type = 'citoyen';
        $client->prenom = $request['prenom_c'];
        $client->telephone = $request['telephone_c'];
        $client->email = $request['email_c'];
        $client->wilaya = $request['wilaya_c'];
        $client->commune = $request['commune_c'];
        $client->date_naissance = $request['date_naissance_c'];
        $client->piece_identite = $request['piece_identite_c'];
        $client->sexe = $request['sexe_c'];
        $client->password= Hash::make($request['password_c']);
        $client->password_text= $request['password_c'];

        $client->date_delivrance = $request['date_delivrance_c'];
        $client->save(); 


        return redirect()->route('client.index')->with('success', 'Inséré avec succés ');

        // if(Auth::guard('admin')->check()){
        // }else{
        //     $dataEmail = [
        //         'email' => $request['email_c'],
        //         'code'=>$code
        //     ];
        //     Mail::send('email', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
        //         $message->to($dataEmail['email'])
        //             ->subject('【Wassit】Code de confirmation ');
        //     });                
        //     return redirect()->route('confirm_email');//->with('success', 'Bien Insére vous pouvez efféctué le login ');
        // }

        
    }
    public function storeTypeassociation(Request $request)
    {
        do {
            $code= mt_rand( 100000, 999999 );
        } while ( DB::table( 'clients' )->where( 'code', $code )->exists() );

        $client = new Client();
        $client->nom= $request['nom_a'];
        $client->code= $code;
        $client->type = 'association';

        $client->prennom= $request['prennom_a'];
        $client->telephone= $request['telephone_a'];
        $client->email= $request['email_a'];
        $client->wilaya= $request['wilaya_a'];
        // $client->wilaya= $request['wilaya_a'];
        $client->date_naissance= $request['date_naissance_a'];
        $client->sexe= $request['sexe_a'];
        $client->piece_identite= $request['piece_identite_a'];
        $client->date_delivrance= $request['date_delivrance_a'];
        $client->qualite= $request['qualite_a'];
        $client->denomination= $request['denomination_a'];
        $client->nis= $request['nis_a'];
        $client->password= Hash::make($request['password_a']);
        $client->password_text= $request['password_a'];
        $client->caractere= $request['caractere_a'];
        $client->type= $request['type_a'];        
        $client->save();       
        if(Auth::guard('admin')->check()){
            return redirect()->route('client.index')->with('success', 'Inséré avec succés ');
        }else{

            $dataEmail = [
                'email' => $request['email_a'],
                'code'=>$code
            ];
            Mail::send('email', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
                $message->to($dataEmail['email'])
                    ->subject('【Wassit】Code de confirmation ');
            });                
            return redirect()->route('confirm_email');//->with('success', 'Bien Insére vous pouvez efféctué le login ');

        }
        
    }

    public function plus($id_client)
    {
        $client = Client::find($id_client);
        $client->count= $client->count+1;
        $client->save();
        return response()->json(['reponse' =>1]);    
    }


    public function minus($id_client)
    {
        $client = Client::find($id_client);
        $client->count= $client->count-1;
        $client->save();
        return response()->json(['reponse' =>1]);    
    }

    public function getCompteur($id_client)
    {
        $client = Client::find($id_client);
        $count = $client->count;
        return response()->json(['reponse' => $count]);
        // return view('compteur',compact('client','count'));

    }

    public function compteur($id_client)
    {
        $client = Client::find($id_client);
        if(is_null($client)){
            return Redirect::route('login');
        }else{
            $count = $client->count;            
        }

        return view('compteur',compact('client','count'));

    }
    public function storeTypeoperateur(Request $request)
    {
        do {
            $code= mt_rand( 100000, 999999 );
        } while ( DB::table( 'clients' )->where( 'code', $code )->exists() );

        $client = new Client();
        $client->nom = $request['nom_op'];
        $client->code = $code;//request['nom_op'];
        $client->type = 'operateur economic';
        $client->status = $request['status'];//'operateur economic';

        $client->prenom = $request['prenom_op'];
        $client->telephone = $request['telephone_op'];
        $client->email = $request['email_op'];
        $client->wilaya = $request['wilaya_op'];
        $client->commune = $request['commune_op'];
        $client->date_naissance = $request['date_naissance_op'];
        $client->sexe = $request['sexe_op'];
        $client->piece_identite = $request['piece_identite_op'];
        $client->date_delivrance = $request['date_delivrance_op'];
        $client->qualite = $request['qualite_op'];
        $client->denomination = $request['denomination_op'];
        $client->nis = $request['nis_op'];
        $client->password= Hash::make($request['password_op']);
        $client->password_text= $request['password_op'];
        if($request->file('piece_jointe')){
            try {
                $path = $request->file('piece')->store('/pieces');                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $investissement->piece_jointe = $path;
        }

        $client->sexe = $request['sexe'];
        $client->date_delivrance = $request['date_delivrance'];
        $client->save();       
        if(Auth::guard('admin')->check()){
            return redirect()->route('client.index')->with('success', 'Inséré avec succés ');
        }else{
            // dd($random);
            $dataEmail = [
                'email' => $request['email_op'],
                'code'=>$code
            ];
            Mail::send('email', ['dataEmail' => $dataEmail], function ($message) use ($dataEmail) {
                $message->to($dataEmail['email'])
                    ->subject('【Wassit】Confirmez votre inscription ');
            });                

            return redirect()->route('confirm_email');//->with('success', 'Bien Insére vous pouvez efféctué le login ');
        }
        
    }    

    public function store(Request $request,$type)
    {
        dd($type);
        $client = new Client();
        $client->nom = $request['nom'];
        $client->type = $type;
        $client->prenom = $request['prenom'];
        $client->telephone = $request['telephone'];
        $client->email = $request['email'];
        $client->wilaya = $request['wilaya'];
        $client->commune = $request['commune'];
        $client->date_naissance = $request['date_naissance'];
        if($request->file('piece_jointe')){
            try {
                $path = $request->file('piece')->store('/pieces');                
            } catch (Exception $e) {
                return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
            }
            $investissement->piece_jointe = $path;
        }

        $client->sexe = $request['sexe'];
        // if($request->file('piece')){
        //     try {
        //         $path = $request->file('piece')->store('/pieces');                
        //     } catch (Exception $e) {
        //         return Redirect::back()->withInput()->with('error', 'Images Trés grande');                
        //     }
        //     $investissement->piece_jointe = $path;
        // }
        $client->date_delivrance = $request['date_delivrance'];
        $client->save();       
        return redirect()->route('client.index')->with('success', 'Inséré avec succés ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($client_id)
    {
        $client = Client::find($client_id);
        $wilayas = Wilaya::all();
        $communes = Commune::all();
        $communes = Commune::all();
        $wilayas = Wilaya::all();
        $administrations = Administration::all();
        $secteurs = Secteur::all();
        $client = Client::find($client_id);
        return view('clients.edit',compact('client','wilayas','communes','administrations','secteurs'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($client_id)
    {
        $client = Client::find($client_id);
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Supprimé avec succés ');
    }
}
