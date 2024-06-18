<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    
    public function create()
    {
        // Afficher la vue du formulaire de paiement
        return view('payment.create');
    }

    public function store(Request $request)
    {
        // Valider les données de formulaire
        
        $request->validate([
            'phone_number' => [
                'required',
                'regex:/^(\+228|00228)?[9|7]\d{7}$/'
            ], // Regex pour vérifier le numéro togolais
            'tarif' => 'required|in:100,200,500',
        ]);

        // Rediriger vers l'intégrateur de paiement
        // Code pour intégrer Paygate ici

        // Après le paiement réussi
        // Assigner et envoyer login et mot de passe via SMS

        // Enregistrer la vente dans la base de données

        // Rediriger avec un message de succès
        return redirect()->route('payment.create')->with('success', 'Paiement réussi, veuillez vérifier vos SMS pour les identifiants.');
    }
}
