<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annonce;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function proprietaire()
    {
        $proprietaires = User::where('user_type', 'proprietaire')->get();
        return view('admins.proprietaires', compact('proprietaires'));
    }

    public function etudiant()
    {
        $etudiants = User::where('user_type', 'etudiant')->get();
        return view('admins.etudiants', compact('etudiants'));
    }

    public function validateAnnonce(Annonce $annonce)
    {
        $annonce->update(['status' => 'verified']);
        return back()->with('success', 'Annonce vérifiée avec succès');
    }

    public function activateOrDeactivateUser(User $user)
    {
        if ($user->status == 'actif') {
            $user->update(['status' => 'inactif']);
            return back()->with('success', 'Utilisateur désactivé avec succès');
        } else {
            $user->update(['status' => 'actif']);
            return back()->with('success', 'Utilisateur activé avec succès');
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function showProprietaire(User $proprietaire)
    {
        return view('admins.show_proprietaire', compact('proprietaire'));
    }
    
    public function showEtudiant(User $etudiant)
    {
        return view('admins.show_etudiant', compact('etudiant'));
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
