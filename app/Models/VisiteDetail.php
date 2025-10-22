<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiteDetail extends Model
{
    use HasFactory;

    protected $table = 'visite_details';
    protected $primaryKey = 'ID_VISITE_DETAIL';
    protected $fillable = [
        'ID_BIEN', 'IP_VISITEUR', 'USER_AGENT'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'ID_BIEN', 'ID_BIEN');
    }
}
