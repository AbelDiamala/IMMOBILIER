<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_bien extends Model
{
    use HasFactory;

    protected $table = 'type_biens';
    protected $primaryKey = 'ID_TYPE';
    protected $fillable = [
        'NOM_TYPE',
    ];

    public function biens()
    {
        return $this->hasMany(Bien::class, 'TYPE_ID', 'ID_TYPE');
    }

    public function alertes()
    {
        return $this->hasMany(Alerte::class, 'TYPE_ID', 'ID_TYPE');
    }
}
