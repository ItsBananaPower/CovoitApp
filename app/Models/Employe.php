<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = ['nom','prenom','email'];
    public function voitures(){
        return $this->hasMany(Voiture::class,'id_employe');
    }

    public function campuses(){
        return $this->belongsToMany(Campus::class, 'frequenter', 'id_campuses', 'id_employe');
    }

    public function trajets(){
        return $this->belongsToMany(trajet::class, 'est_passager','id_employe', 'id_trajet')->withPivot('date_inscription');
    }
}
