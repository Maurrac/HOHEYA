@extends('admins.layout.app')

@section('content')
    <div class="container">
        <h1>Proprietaires</h1>
        {{-- <a href="{{ route('admin.proprietaires.create') }}" class="btn btn-primary">Ajouter</a> --}}
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    {{-- <th>Prenom</th> --}}
                    {{-- <th>Adresse</th> --}}
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proprietaires as $proprietaire)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $proprietaire->name }}</td>
                        {{-- <td>{{ $proprietaire->prenom }}</td> --}}
                        {{-- <td>{{ $proprietaire->adresse }}</td> --}}
                        <td>{{ $proprietaire->telephone }}</td>
                        <td>{{ $proprietaire->email }}</td>
                        <td>
                            <a href="{{ route('admin.proprietaires.show', $proprietaire->id) }}" class="btn btn-warning"><i
                                    class="fas fa-eye"></i></a>
                            {{-- <form action="{{ route('admins.proprietaires.destroy', $proprietaire->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>  --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
