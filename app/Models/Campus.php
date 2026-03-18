<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campus extends Model
{
    use HasFactory;
    protected $fillable = ['description','adresse','type'];

    public function employes(){
        return $this->belongsToMany(Employe::class, 'frequenter', 'id_campus', 'id_employe');
    }

    public function trajetsDepart(){
        return $this->hasMany(Trajet::class, 'id_campus_depart');
    }

    public function trajetsArrivee(){
        return $this->hasMany(Trajet::class, 'id_campus_arrivee');
    }
}
