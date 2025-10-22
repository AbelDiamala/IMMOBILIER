<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $table = 'biens';
    protected $primaryKey = 'ID_BIEN';
    protected $fillable = ['TITRE','DESCRIPTION','NB_PIECES','NB_DOUCHES','GARAGE','NOUVELLE_CONSTRUCTION','ETAGE','PRIX','SURFACE','TYPE_ID','STANDING_ID','STATUT_ID','LOCALISATION_ID','UTILISATEUR_ID'];

    public function type()
    {
        return $this->belongsTo(Type_bien::class, 'TYPE_ID', 'ID_TYPE');
    }

    public function standing()
    {
        return $this->belongsTo(Standing::class, 'STANDING_ID', 'ID_STANDING');
    }

    public function statut()
    {
        return $this->belongsTo(Statut::class, 'STATUT_ID', 'ID_STATUT');
    }

    public function localisation()
    {
        return $this->belongsTo(Localisation::class, 'LOCALISATION_ID', 'ID_LOCALISATION');
    }

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'UTILISATEUR_ID', 'ID_UTILISATEUR');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'BIEN_ID', 'ID_BIEN');
    }

    // Bien.php
    public function visiteDetails()
    {
        return $this->hasMany(VisiteDetail::class, 'ID_BIEN', 'ID_BIEN');
    }

     // Bien.php
    public function photos()
    {
        return $this->hasMany(Photo::class, 'ID_BIEN', 'ID_BIEN');
    }

    public function notes()
    {
        return $this->hasMany(NoteBien::class, 'ID_BIEN', 'ID_BIEN');
}

}

