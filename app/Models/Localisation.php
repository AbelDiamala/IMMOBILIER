<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    use HasFactory;

    protected $table = 'localisations';        // nom de la table
    protected $primaryKey = 'ID_LOCALISATION'; // clé primaire
    protected $fillable = [
        'LOCALISATION',
        'REGION',
        'PAYS'
    ];

    /**
     * Une localisation peut avoir plusieurs biens
     */
    public function biens()
    {
        return $this->hasMany(Bien::class, 'LOCALISATION_ID', 'ID_LOCALISATION');
    }

    /**
     * Une localisation peut être liée à plusieurs alertes
     */
    public function alertes()
    {
        return $this->hasMany(Alerte::class, 'LOCALISATION_ID', 'ID_LOCALISATION');
    }
}
