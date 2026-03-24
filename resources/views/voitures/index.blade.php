@extends('layouts.dashboard')

@section('content')
    @include('partials.liste_info')

    <div style="text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 10px;">
        Liste des voitures
    </div>

    <table>
        <thead>
            <tr>
                <th>Modèle</th>
                <th>Places</th>
                <th>Propriétaire</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voitures as $voiture)
            <tr>
                <td>{{ $voiture->modele }}</td>
                <td>{{ $voiture->nb_places }}</td>
                <td>
                    {{ $voiture->employe->prenom }} {{ $voiture->employe->nom }}
                </td>
                <td>
                    <a href="{{ route('voitures.show', $voiture->id) }}" class="btn">Voir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection