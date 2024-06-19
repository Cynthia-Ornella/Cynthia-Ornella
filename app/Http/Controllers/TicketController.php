<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Tarif;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::where('is_used', false)->get();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tarifs = Tarif::all();
        return view('tickets.create', compact('tarifs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'identifiant' => 'required|string|max:255',
            'tarif_id' => 'required|exists:tarifs,id',
        ]);

        Ticket::create([
            'identifiant' => $request->identifiant,
            'mot_de_passe' => $request->mot_de_passe,
            'tarif_id' => $request->tarif_id,
            'is_used' => false,
        ]);

        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarifs = Tarif::all();
        $ticket = Ticket::find($id);
        return view('tickets.create', compact('tarifs', 'ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);

        $ticket->identifiant = $request->identifiant;
        $ticket->mot_de_passe = $request->mot_de_passe;
        $ticket->tarif_id = $request->tarif_id;
        $ticket->save();

        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully');
    }
}
