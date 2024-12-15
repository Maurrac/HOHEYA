@extends('proprietaire.layout.app')

@section('content')
    <div class="container">
        <h1>Demandes pour l'annonce: {{ $annonce->titre }}</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Étudiant</th>
                    <th>Message</th>
                    <th>Date de demande</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($annonce->demandes as $demande)
                    <tr>
                        <td>{{ $demande->etudiant->name }}</td>
                        <td>{{ $demande->message }}</td>
                        <td>{{ $demande->created_at->format('d/m/Y') }}</td>
                        <td>
                            {{-- <form action="{{ route('demandes.update', $demande->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success">Accepter</button>
                            </form> --}}
                            {{-- <form action="{{ route('demandes.destroy', $demande->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Refuser</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
