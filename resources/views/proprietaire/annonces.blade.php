@extends('proprietaire.layout.app')

@section('content')

    <div class="container">

        <h1 class="mb-4">Liste des Annonces</h1>

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
        <div class="d-flex justify-content-end my-3 mx-3">
            <a href="{{ route('annonces.create') }} " class="btn btn-primary">Créer annonces</a>
        </div>
        @if ($annonces->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Localisation</th>
                        <th>Prix</th>
                        <th>Type</th>
                        <th>Créée le</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($annonces as $annonce)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $annonce->titre }}</td>
                            <td>{{ Str::limit($annonce->description, 50) }}</td>
                            <td>{{ $annonce->localisation }}</td>
                            <td>{{ $annonce->prix }} FCFA</td>
                            <td>{{ ucfirst($annonce->type) }}</td>
                            <td>{{ $annonce->created_at->format('d/m/Y') }}</td>
                            <td class="{{ $annonce->status == 'verified' ? 'text-success' : 'text-danger' }}">
                                {{ $annonce->status }}</td>
                            <td class="d-flex justify-content-around m-auto">
                                @if (Auth::user()->id === $annonce->proprietaire_id)
                                    <a href="{{ route('annonces.demandes', $annonce->id) }}"
                                        class="btn btn-info btn-sm">Voir demandes</a>
                                    {{-- <a href="{{ route('annonces.edit', $annonce->id) }}"
                                        class="btn btn-warning btn-sm">Modifier</a> --}}
                                    {{-- <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">Supprimer</button>
                                    </form> --}}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $annonces->links() }}
            </div>
        @else
            <p>Aucune annonce disponible pour le moment.</p>
        @endif
    </div>
@endsection
