<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getAnnonces()
    {
        $annonces = Annonce::paginate(10);
        return view("etudiant.annonces", compact("annonces"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant.create-demande');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $annonceId)
    {
        $annonce = Annonce::findOrFail($annonceId);

        $request->validate([
            'message' => 'nullable|string',
        ]);

        $demande = Demande::create([
            'annonce_id' => $annonce->id,
            'etudiant_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return response()->json([
            'message' => 'Demande envoyée avec succès.',
            'demande' => $demande,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
