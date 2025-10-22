<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    use HasFactory;

    protected $table = 'alertes';
    protected $primaryKey = 'ID_ALERTE';
    protected $fillable = [
        'CLIENT_ID','TYPE_ID','LOCALISATION_ID','BUDGET_MIN','BUDGET_MAX','PERIODE','DATE_DEBUT','DATE_FIN','STATUT'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    public function type()
    {
        return $this->belongsTo(Type_bien::class, 'TYPE_ID', 'ID_TYPE');
    }

    public function localisation()
    {
        return $this->belongsTo(Localisation::class, 'LOCALISATION_ID', 'ID_LOCALISATION');
    }
}
