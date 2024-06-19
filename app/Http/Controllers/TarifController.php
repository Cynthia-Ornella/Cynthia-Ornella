<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;

class TarifController extends Controller
{
    public function index()
    {
        // Logique pour récupérer et afficher tous les tarifs
        $tarifs = Tarif::all();
        return view('tarifs.index', ['tarifs' => $tarifs]);
    }
    public function create()
    {
        return view('tarifs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'duration' => 'required|numeric'
        ]);

        Tarif::create([
            'name' => $request->name,
            'price' => $request->price,
            'duration' => $request->duration
        ]);

        return redirect()->route('tarifs.index')->with('success', 'Tarif créé avec succès');
    }
}

