<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $fillable = ['date_time_depart','date_time_arrivee','id_campus'];

    public function campusDArrivee(){
        return $this->belongsTo(Campus::class, 'id_campus_arrivee');
    }

    public function campusDeDepart(){
        return $this->belongsTo(Campus::class, 'id_campus_depart');
    }

    public function voitures(){
        return $this->belongsTo(Voiture::class, 'id_trajet');
    }

    public function employes(){
        return $this->belongsToMany(Employe::class, 'est_passager', 'id_employe', 'id_trajet')->withPivot('date_inscription');
    }
}
