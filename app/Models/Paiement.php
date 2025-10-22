<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $table = 'paiements';
    protected $primaryKey = 'ID_PAIEMENT';
    protected $fillable = [
        'CLIENT_ID','TYPE_PAIEMENT','MONTANT','DATE_PAIEMENT','MODE_PAIEMENT','STATUT'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'CLIENT_ID', 'ID_CLIENT');
    }
}
