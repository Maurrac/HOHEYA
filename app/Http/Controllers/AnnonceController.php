<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnonceController extends Controller
{

    public function search(Request $request)
    {
        $search = $request->input('search');
        $annonces = Annonce::when($search, function ($query, $search) {
            return $query->where('titre', 'like', "%{$search}%")
                        ->orWhere('localisation', 'like', "%{$search}%");
        })->where('status', 'verified')->latest()->paginate(10);

        return view('annonces.index', compact('annonces'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all announcements with pagination
        $annonces = Annonce::where('proprietaire_id', Auth::id())->paginate(10);

        return view('proprietaire.annonces', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $view = Auth::user()->user_type == "etudiant" ? "etudiant.create-annonce" : "proprietaire.create-annonce";
        return view($view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        try {
            $request->validate([
                'titre' => 'required|string|max:255',
                'description' => 'required|string',
                'localisation' => 'required|string',
                'prix' => 'required|integer',
                'type' => 'required|in:logement,colocation',
                'files.*' => 'mimes:jpg,jpeg,png|max:2048',
            ]);

            // Handle file uploads
            $uploadedFiles = [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $uploadedFiles[] = $file->store('annonces', 'public');
                }
            }

            Annonce::create([
                'proprietaire_id' => Auth::id(),
                'titre' => $request->titre,
                'description' => $request->description,
                'localisation' => $request->localisation,
                'prix' => $request->prix,
                'type' => $request->type,
                'files' => $uploadedFiles ? json_encode($uploadedFiles) : null,
            ]);
            return redirect()->back()->with('success', 'Annonce creéée avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Echec lors de la création de l'annone: " . $e->getMessage());
        }

    }

    public function showDemandes($id)
    {
        $annonce = Annonce::with('demandes')->findOrFail($id);
        return view('proprietaire.demandes', compact('annonce'));
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
        
    }
}
