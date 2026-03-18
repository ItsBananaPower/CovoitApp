<div class="info-box">
    <strong>Informations principales de M. {{ strtoupper($employe->nom) }}</strong>
    <table>
        <tr><td>Nom</td><td>{{ $employe->nom }}</td></tr>
        <tr><td>Prénom</td><td>{{ $employe->prenom }}</td></tr>
        <tr><td>Email</td><td>{{ $employe->email }}</td></tr>
        <tr><td>NbVoiture</td><td>{{ $employe->voitures->count() }}</td></tr>
    </table>
</div>