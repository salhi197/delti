<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Wilaya;
use App\Daira;
use App\Administration;
use App\Secteur;
use App\Typerequete;
use App\Sujetrequete;
use App\Etatrequete;

use Carbon\Carbon;
use Hash;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use lepiaf\SerialPort\SerialPort;
use lepiaf\SerialPort\Parser\SeparatorParser;
use lepiaf\SerialPort\Configure\TTYConfigure;

class SettingController extends Controller
{
    public function index($elt)
    {
        if($elt == 'wilaya'){
            $wilayas = Wilaya::all();
            return view('wilayas.index',compact('wilayas'));

        }
        if($elt == 'daira'){
            $elements = Daira::all();
        }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$elt)
    {

    }

        public function show($id_setting)

    {
        $setting = Setting::find($id_setting);
        return view('settings.view',compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id_setting)
    {
        $setting = Setting::find($id_setting);
        return view('settings.edit',compact('setting'));
    }

    public function update(Request $request,$setting_id)
    {
        $setting = Setting::find($setting_id);  
        $setting->determination = $request['determination'];
        $setting->duree = $request['duree'];
        $setting->aspect = $request['aspect'];
        $setting->save();
        
        return redirect()->route('setting.index')->with('success', 'reservation inséré avec succés ');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_setting)
    {
        $setting = Setting::find($id_setting);
        $setting->delete();
        return redirect()->route('setting.index')->with('success', 'le Setting a été supprimé ');        
    }


}
