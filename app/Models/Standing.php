<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    use HasFactory;

    protected $table = 'standings';
    protected $primaryKey = 'ID_STANDING';
    protected $fillable = [
        'NOM_STANDING',
    ];

    public function biens()
    {
        return $this->hasMany(Bien::class, 'STANDING_ID', 'ID_STANDING');
    }
}
