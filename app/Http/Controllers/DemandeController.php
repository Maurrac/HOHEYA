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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $annonceId)
    {
        $annonce = Annonce::findOrFail($annonceId);

        if ($annonce->proprietaire_id === Auth::id()) {
            return response()->json(['message' => 'Vous ne pouvez pas postuler à votre propre annonce.'], 403);
        }

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
