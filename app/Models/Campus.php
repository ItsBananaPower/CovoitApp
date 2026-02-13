<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $fillable = ['description','adresse','type'];

    public function employes(){
        return $this->belongsToMany(Employe::class, 'frequenter', 'id_campus', 'id_employe')->withPivot('date_inscription');
    }

    public function trajetsDepart(){
        return $this->hasMany(Trajet::class, 'id_campus_depart');
    }

    public function trajetsArrivee(){
        return $this->hasMany(Trajet::class, 'id_campus_arrivee');
    }
}
