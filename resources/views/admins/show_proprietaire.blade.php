@extends('admins.layout.app')

@section('content')
    <div class="container">
        <h1>{{ $proprietaire->name }}</h1>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Nom</td>
                                <td>{{ $proprietaire->name }}</td>
                            </tr>
                            <tr>
                                <td>Telephone</td>
                                <td>{{ $proprietaire->telephone }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $proprietaire->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Annonces</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titre</th>
                                <th>Adresse</th>
                                <th>Prix</th>
                                <th>Type</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($proprietaire->annonces as $annonce)
                                <tr>
                                    <td>{{ $annonce->id }}</td>
                                    <td>{{ $annonce->titre }}</td>
                                    <td>{{ $annonce->localisation }}</td>
                                    <td>{{ $annonce->prix }}</td>
                                    <td>{{ $annonce->type }}</td>
                                    <td class="{{ $annonce->status == 'verified' ? 'text-success' : 'text-danger' }}">
                                        {{ $annonce->status }}</td>
                                    <td>
                                        @if ($annonce->status !== 'verified')
                                            <a href="{{ route('admin.annonce.verify', $annonce->id) }}"
                                                class="btn btn-warning"> <i class="fas fa-check"></i></a>
                                        @endif
                                        {{-- <form action="{{ route('admins.annonces.destroy', $annonce->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
