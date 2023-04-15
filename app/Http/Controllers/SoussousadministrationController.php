<?php

namespace App\Http\Controllers;

use App\Sousadministration;
use App\Soussousadministration;
use App\administration;
use Illuminate\Http\Request;

class SoussousadministrationController extends Controller
{
    public function index()
    {
        $soussousadministrations = Soussousadministration::all();
        $administrations = administration::all();
        $sousadministrations = Sousadministration::all();
        return view('soussousadministrations.index',compact('administrations','soussousadministrations','sousadministrations'));
    }

    public function store(Request $request)
    {
        // dd($request['administration']);
        $soussousadministration = new Soussousadministration([
            'label' => $request['label'],
            'administration' => $request['administration'],
            'sousadministration' => $request['sousadministration'],

        ]);
        $soussousadministration->save();    
        return redirect()->route('soussousadministration.index')->with('success', 'inserted successfuly ! ');
    }
    public function destroy($sousadministration)
    {
        $sousadministration = Soussousadministration::find($sousadministration);
        $sousadministration->delete();
        return redirect()->route('soussoussousadministration.index')
            ->with('success', 'supprimé avec succé !');
    }
    /**
     * 
     */

     public function SousstoreAjax(Request $request)
     {
        if($request->ajax()){
            $array = $request['data'];        
            $data=  array();
            parse_str($array, $data);        
            $sousadministration = new administration([
                'label' => $data['label'],
                'administration'=>$data['administration']
            ]);
            $sousadministration->save();    
            $response = array(
                'administration' => $data,
                'msg' => 'catégorie ajouté',
            );
            return Response::json($response);
        }
    }
    public function update(Request $request)
    {
        $sousadministration = Soussousadministration::find($request['id_administration']);
        $sousadministration->label = $request['administration'];
        // $sousadministration->icon = $request['icon'];
        if($request->file('icon')){
            $file = $request->file('icon');// as $image){
                $icon = $file->store(
                    'soussousadministrations/icon',
                    'public'
                );
                
                $sousadministration->icon = $icon;     
            }


        if($request->file('image')){
            $file = $request->file('image');
                $image = $file->store(
                    'soussousadministrations/images',
                    'public'
                );
                $sousadministration->image = $image;     
        }
        $sousadministration->save();
        return redirect()->route('soussoussousadministration.index')->with('success', 'edited  successfuly ! ');
   }

}
