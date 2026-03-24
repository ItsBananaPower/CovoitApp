@extends('layouts.dashboard')

@section('content')
    @include('partials.liste_info')

    <h3 style="text-decoration: underline;">Profil Employé</h3>

    @include('partials.employe_info', ['employe' => $employe])

    <p><strong style="text-decoration: underline;">Activité</strong></p>
    <p>Statut : Conducteur</p>

    <form action="{{ route('employes.show', $employe->id) }}" method="GET">
        <span style="text-decoration: underline;">Voiture</span>
        <input type="text" name="modele_cherche" placeholder="Modèle à chercher">
        <button type="submit" class="btn">Vérifier</button>
        <strong>{{ $resultatVerif }}</strong>
    </form>
    
    @if(session()->has('erreur_bus'))
        <div style="color: red; font-weight: bold; border: 1px solid red; padding: 10px; margin-bottom: 10px; text-align: center;">
            {{ session('erreur_bus') }}
        </div>
    @endif

    <br>
    @foreach($employe->voitures as $voiture)
        <p>
            Voiture {{ $loop->iteration }} 
            <a href="{{ route('voitures.show', $voiture->id) }}" class="btn">Voir</a>
        </p>
    @endforeach
@endsection