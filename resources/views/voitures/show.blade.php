@extends('layouts.dashboard')

@section('content')
    @include('partials.liste_info')

    <h3 style="text-decoration: underline;">Voiture</h3>

    <div class="flex-row">
        @include('partials.key_value', ['key' => 'Modèle', 'value' => $voiture->modele])
        @include('partials.key_value', ['key' => 'Nb Place', 'value' => $voiture->nb_places])
    </div>

    <h3 style="text-decoration: underline;">Propriétaires</h3>
    @include('partials.employe_info', ['employe' => $voiture->employe])
@endsection