<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class ClientAuthController extends Controller
{
    public function storeProprietaire(Request $request): RedirectResponse
    {
        // dd($request->all());
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'telephone' => ['required', 'string', 'max:255'],
                'file' => ['required', 'mimes:jpg,jpeg,png,pdf', 'max:2048'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            if ($request->hasFile('file')) {
                $file = $request->file('file');   
                $path = $file->store('uploads', 'public');            
            }
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'user_type' => 'proprietaire',
                'document' => $path,
                'password' => Hash::make($request->password),
            ]);
    
    
            Auth::login($user);
    
            return redirect(route('proprietaire.dashboard'))->with('success', 'Propriétaire ajouté avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeEtudiant(Request $request): RedirectResponse
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'telephone' => ['required', 'string', 'max:255'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
    
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_type' => 'etudiant',
                'telephone' => $request->telephone,
                'password' => Hash::make($request->password),
            ]);
    
    
            Auth::login($user);
    
            return redirect(route('etudiant.dashboard'))->with('success', 'Etudiant ajouté avec succès');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function loginProprietaire(Request $request)
    {
        try {
            // Valider les données de la requête
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            // Vérifier les identifiants
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate(); 
    
                return redirect(route('proprietaire.dashboard'));
            }
        } catch (\Exception $e) {
            // Si la connexion échoue
            return redirect()->back()->with('error', 'Invalid credentials ' );
        }
    }

    public function loginEtudiant(Request $request)
    {
        try {
            // Valider les données de la requête
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
    
            // Vérifier les identifiants
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate(); 
    
                return redirect(route('etudiant.dashboard'));
            }
        } catch (\Exception $e) {
            // Si la connexion échoue
            return redirect()->back()->with('error', 'Invalid credentials');
        }

    }
}
