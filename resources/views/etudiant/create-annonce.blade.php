@extends('etudiant.layout.app') 

@section('content')
    <div class="container">
        <h1>Créer une annonce</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('annonces.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titre" class="form-label">Titre de l'annonce</label>
                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" id="titre"
                    value="{{ old('titre') }}" required>
                @error('titre')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                    rows="4" required>{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="localisation" class="form-label">Localisation</label>
                <input type="text" name="localisation" class="form-control @error('localisation') is-invalid @enderror"
                    id="localisation" value="{{ old('localisation') }}" required>
                @error('localisation')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror" id="prix"
                    value="{{ old('prix') }}" required>
                @error('prix')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-select @error('type') is-invalid @enderror" required>
                    <option value="">Sélectionnez</option>
                    <option value="logement" {{ old('type') == 'logement' ? 'selected' : '' }}>Logement</option>
                    <option value="colocation" {{ old('type') == 'colocation' ? 'selected' : '' }}>Colocation</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
