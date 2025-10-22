<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;

    protected $table = 'statuts';
    protected $primaryKey = 'ID_STATUT';
    protected $fillable = [
        'NOM_STATUT',
    ];

    public function biens()
    {
        return $this->hasMany(Bien::class, 'STATUT_ID', 'ID_STATUT');
    }
}
