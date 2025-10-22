<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'ID_TRANSACTION';
    protected $fillable = [
        'CLIENT_ID','BIEN_ID','DATE_TRANSACTION','MONTANT','TYPE_TRANSACTION'
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
