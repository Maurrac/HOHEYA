@extends('admins.layout.app')

@section('content')
    <h1>{{ $etudiant->name }}</h1>

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
                            <td>{{ $etudiant->name }}</td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td>{{ $etudiant->telephone }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ $etudiant->email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h2>Demandes</h2>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title   ">Demandes</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Statut</th>
                            <th>Telephone</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($etudiant->demandes as $demande)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $demande->statut }}</td>
                                <td>{{ $demande->message }}</td>
                                <td>{{ $demande->email }}</td>
                                <td>
                                    {{-- <a href="{{ route('admins.demandes.show', $demande->id) }}" class="btn btn-warning"><i
                                            class="fas fa-eye"></i></a>
                                    <form action="{{ route('admins.demandes.destroy', $demande->id) }}" method="POST"
                                        style="display: inline;">
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
@endsection
