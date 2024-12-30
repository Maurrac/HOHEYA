@extends('proprietaire.layout.app')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="container-fluid">

            <h1>Créer une annonce</h1>

            <form action="{{ route('annonces.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row m-auto">
                    <div class="col-md-6 form-group ">
                        <label for="titre" class="form-label">Titre de l'annonce</label>
                        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror"
                            id="titre" value="{{ old('titre') }}" required>
                        @error('titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="localisation" class="form-label">Localisation</label>
                        <input type="text" name="localisation"
                            class="form-control @error('localisation') is-invalid @enderror" id="localisation"
                            value="{{ old('localisation') }}" required>
                        @error('localisation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="prix" class="form-label">Prix</label>
                        <input type="number" name="prix" class="form-control @error('prix') is-invalid @enderror"
                            id="prix" value="{{ old('prix') }}" required>
                        @error('prix')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                            required>
                            <option value="">Sélectionnez</option>
                            <option value="logement" {{ old('type') == 'logement' ? 'selected' : '' }}>Logement</option>
                            {{-- <option value="colocation" {{ old('type') == 'colocation' ? 'selected' : '' }}>Colocation --}}
                            </option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group ">
                        <label for="files" class="form-label">Images</label>
                        <input type="file" name="files[]" class="form-control" multiple>
                        @error('files.*')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-12 form-group ">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                            rows="4" required>{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Créer</button>
            </form>
        </div>
    </div>
@endsection
