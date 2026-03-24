@extends('layouts.dashboard')

@section('content')
    @if(session()->has('error'))
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 15px;">
            {{ session('error') }}
        </div>
    @endif
    
    <div style="text-align: center; border: 1px solid black; padding: 5px; margin-bottom: 10px;">
        Liste des employés
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employes as $employe)
            <tr>
                <td>{{ $employe->nom }}</td>
                <td>{{ $employe->prenom }}</td>
                <td>{{ $employe->email }}</td>
                <td>
                    <a href="{{ route('employes.show', $employe->id) }}" class="btn">Voir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection