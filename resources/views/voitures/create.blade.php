@extends('layouts.dashboard')

@section('content')
    <h3>Ajouter un véhicule</h3>

    <form action="{{ route('voitures.store') }}" method="POST">
        @csrf 
        
        <input type="hidden" name="id_employe" value="{{ $employe->id }}">

        <div>
            <label>Nom du modèle :</label><br>
            <input style="border: 1px solid black;" type="text" name="modele" required>
        </div>

        <br>

        <div>
            <label>Nombre de places :</label><br>
            <input style="border: 1px solid black;" type="number" name="nb_places" required min="1" value="1">
        </div>

        <br>

        <button type="submit" class="btn">Ajouter</button>
    </form>
@endsection