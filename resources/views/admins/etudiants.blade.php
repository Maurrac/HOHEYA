@extends('admins.layout.app')

@section('content')
    <div class="container">
        <h1>Etudiants</h1>
        {{-- <div class="btn btn-primary btn-medium">
        <a href="{{ route('admin.etudiants.create') }}" class="btn btn-primary">Ajouter</a>
        </div> --}}
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $etudiant->name }}</td>
                        <td>{{ $etudiant->telephone }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>
                            <a href="{{ route('admin.etudiants.show', $etudiant->id) }}" class="btn btn-warning"><i
                                class="fas fa-eye"></i></a>
                            {{-- <a href="{{ route('admins.etudiants.edit', $etudiant->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>
                        <form action="{{ route('admins.etudiants.destroy', $etudiant->id) }}" method="POST" style="display: inline;">
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
@endsection
