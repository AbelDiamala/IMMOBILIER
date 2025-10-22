<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';           // nom de la table
    protected $primaryKey = 'ID_ROLE';    // clé primaire
    protected $fillable = [
        'NOM_ROLE',
    ];

    /**
     * Un rôle peut être attribué à plusieurs utilisateurs
     */
    public function utilisateurs()
    {
        return $this->hasMany(Utilisateur::class, 'ROLE_ID', 'ID_ROLE');
    }
}
