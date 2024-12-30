<?php

use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientAuthController;

Route::get('/', function () {
    return view('index');
});
Route::get('proprietaire/inscription', function () {
    return view('proprietaire.inscription');
})->name('proprietaire.inscription');

Route::get('etudiant/inscription', function () {
    return view('etudiant.inscription');
})->name('etudiant.inscription');

Route::get('proprietaire/connexion', function () {
    return view('proprietaire.login');
})->name('proprietaire.connexion');

Route::get('etudiant/connexion', function () {
    return view('etudiant.login');
})->name('etudiant.connexion');

Route::get('admin/dashboard', function () {
    return view('admins.index');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('etudiant/dashboard', function () {
    return view('etudiant.index');
})->name('etudiant.dashboard');

Route::get('proprietaire/dashboard', function () {
    return view('proprietaire.index');
})->name('proprietaire.dashboard');

Route::get('/dashboard', function    () {
    if (Auth::user()->user_type == 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif (Auth::user()->user_type == 'etudiant') {
        return redirect()->route('etudiant.dashboard');
    } elseif (Auth::user()->user_type == 'proprietaire') {
        return redirect()->route('proprietaire.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('proprietaire')->group(function () {
        Route::get('/annonces', [AnnonceController::class, 'index'])->name('annonces.index');
        Route::get('/annonces/create', [AnnonceController::class, 'create'])->name('annonces.create'); 
        Route::post('/annonces/save', [AnnonceController::class, 'store'])->name('annonces.store');
        Route::get('/annonces/{id}/demandes', [AnnonceController::class, 'edit'])->name('annonces.edit');
        // Route::post('/annonces/{id}/demandes', [DemandeController::class, 'store']); 
        Route::get('/annonces/{id}/demandes/show', [AnnonceController::class, 'showDemandes'])->name('annonces.demandes');
    });

    Route::prefix('etudiant')->group(function () {
        Route::get('/get-annonces', [DemandeController::class, 'getAnnonces'])->name('demandes.get-annonces');
        Route::get('/demandes', [DemandeController::class, 'index'])->name('demandes.index');
        Route::get('/demandes/create', [DemandeController::class, 'create'])->name('demandes.create');
        Route::post('/demandes/save', [DemandeController::class, 'store'])->name('demandes.store');
    });

    Route::prefix('admin')->group(function () {
        Route::get('/proprietaires', [AdminController::class, 'proprietaire'])->name('admin.proprietaires');
        Route::get('/proprietaires/{proprietaire}/show', [AdminController::class, 'showProprietaire'])->name('admin.proprietaires.show');
        Route::get('/etudiants', [AdminController::class, 'etudiant'])->name('admin.etudiants');
        Route::get('/etudiants/{etudiant}/show', [AdminController::class, 'showEtudiant'])->name('admin.etudiants.show');
        Route::get('/annonces/{annonce}/validate', [AdminController::class, 'validateAnnonce'])->name('admin.validate.annonce');
        Route::get('/users/{user}/activateOrDeactivate', [AdminController::class, 'activateOrDeactivateUser'])->name('admin.activateOrDeactivate.user');
        Route::get('/annonce/{annonce}verify', [AdminController::class, 'validateAnnonce'])->name('admin.annonce.verify');
    });
});

require __DIR__.'/auth.php';


Route::post('/proprietaire/register', [ClientAuthController::class, 'storeProprietaire'])->name('proprietaire.register');

Route::post('/etudiant/register', [ClientAuthController::class, 'storeEtudiant'])->name('etudiant.register');


Route::post('/proprietaire/login', [ClientAuthController::class, 'loginProprietaire'])->name('proprietaire.login');

Route::post('/etudiant/login', [ClientAuthController::class, 'loginEtudiant'])->name('etudiant.login');

Route::get('search', function () {
    $annonces = Annonce::where('status', 'verified')->paginate(10);
    return view('search', compact('annonces'));
})->name('search');;