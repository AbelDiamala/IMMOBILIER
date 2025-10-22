<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';
    protected $primaryKey = 'ID_RESERVATION';
    protected $fillable = [
        'BIEN_ID','CLIENT_ID','DATE_DEBUT','DATE_FIN','MONTANT','STATUT','DATE_RESERVATION'
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
