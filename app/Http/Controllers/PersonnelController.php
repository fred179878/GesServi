<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    public function index()
    {
        $personnels = Personnel::all();
        return view('personnels.index', compact('personnels'));
    }

    public function create()
    {
        // Afficher le formulaire d'ajout
        return view('form_personnel');
    }

    public function store(Request $request)
    {
        // Validation des données soumises par le formulaire
        $request->validate([
            // Règles de validation
        ]);

        // Enregistrement des données dans la base de données
        Personnel::create([
            // Données du personnel
        ]);

        // Redirection avec un message de succès
        return redirect()->route('personnels.index')->with('success', 'Personnel ajouté avec succès.');
    }

    public function edit(Personnel $personnel)
    {
        // Afficher le formulaire de modification
        return view('form_personnel', compact('personnel'));
    }

    public function update(Request $request, Personnel $personnel)
    {
        // Validation des données soumises par le formulaire
        $request->validate([
            // Règles de validation
        ]);

        // Mise à jour des données dans la base de données
        $personnel->update([
            // Données du personnel
        ]);

        // Redirection avec un message de succès
        return redirect()->route('personnels.index')->with('success', 'Personnel mis à jour avec succès.');
    }
}


