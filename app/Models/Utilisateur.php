<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = 'utilisateurs';
    protected $primaryKey = 'ID_UTILISATEUR';
    protected $fillable = [
        'NOM',
        'EMAIL',
        'PASSWORD',
        'ROLE_ID',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'ROLE_ID', 'ID_ROLE');
    }

    public function biens()
    {
        return $this->hasMany(Bien::class, 'UTILISATEUR_ID', 'ID_UTILISATEUR');
    }
}
