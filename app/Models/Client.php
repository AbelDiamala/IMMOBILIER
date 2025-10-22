<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';           // nom de la table
    protected $primaryKey = 'ID_CLIENT';    // clé primaire
    protected $fillable = [
        'NOM',
        'EMAIL',
        'TELEPHONE',
    ];

    /**
     * Un client peut avoir plusieurs réservations
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    /**
     * Un client peut demander plusieurs visites
     */
    public function visites()
    {
        return $this->hasMany(Visite::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    /**
     * Un client peut avoir plusieurs alertes activées
     */
    public function alertes()
    {
        return $this->hasMany(Alerte::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    /**
     * Un client peut effectuer plusieurs paiements
     */
    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    /**
     * Historique des SMS envoyés au client
     */
    public function smsLogs()
    {
        return $this->hasMany(SmsLog::class, 'CLIENT_ID', 'ID_CLIENT');
    }

    /**
     * Historique des transactions (achats ou locations)
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'CLIENT_ID', 'ID_CLIENT');
    }
}
