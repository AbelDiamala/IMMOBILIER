<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;

    protected $table = 'visites';
    protected $primaryKey = 'ID_VISITE';
    protected $fillable = [
        'BIEN_ID','CLIENT_ID','DATE_VISITE','HEURE','MONTANT','STATUT'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'BIEN_ID', 'ID_BIEN');
    }
}
