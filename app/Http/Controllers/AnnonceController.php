<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'localisation' => 'required|string',
            'prix' => 'required|integer',
            'type' => 'required|in:logement,colocation',
        ]);

        $annonce = Annonce::create([
            'proprietaire_id' => Auth::id(),
            'titre' => $request->titre,
            'description' => $request->description,
            'localisation' => $request->localisation,
            'prix' => $request->prix,
            'type' => $request->type,
        ]);

        return response()->json([
            'message' => 'Annonce créée avec succès.',
            'annonce' => $annonce,
        ], 201);
    }

    public function showDemandes($id)
    {
        $annonce = Annonce::with('demandes')->findOrFail($id);

        if ($annonce->proprietaire_id !== Auth::id()) {
            return response()->json(['message' => 'Accès interdit.'], 403);
        }

        return response()->json($annonce->demandes);
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
