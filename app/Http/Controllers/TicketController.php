<?php

namespace App\Http\Controllers;

use App\Fournisseur;
use App\Commune;
use App\Categorie;
use App\Souscategorie;
use App\Soussouscategorie;
use App\Ticket;
use App\Sub;
use Response;
use Illuminate\Http\Request;

class TicketController extends Controller
{
 
    public function index()
    {
        $tickets = Ticket::where('source',$source)->get();
        return view('tickets.index',compact('tickets','source'));
    }

    public function store(Request $request)
    {   
        // dd('ssssssssssssssssssss');
        $ticket = new Ticket([
            'nom' => $request['nom'],
            'telephone' => $request['telephone'],
            'ticket' => $request['ticket']
        ]);
        $ticket->save();  
        return redirect()->back()->with('success', 'inserted successfuly ! ');

    }
    public function destroy($ticket)
    {
        $ticket = Ticket::find($ticket);
        $ticket->delete();
        return redirect()->back()
            ->with('success', 'supprimé avec succé !');
    }

    public function update(Request $request,$id_Ticket)
    {
        $ticket = Ticket::find($id_categorie);
        $ticket->label = $request['label_edit'];
        $ticket->type_en = $request['type_en_edit'];
        $ticket->type_ar = $request['type_ar_edit'];
        $ticket->numero = $request['numero_edit'];
        $ticket->save();
        return redirect()->back()->with('success', 'Modifié avecc Succés ! ');
   }
}
