<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteBien extends Model
{
    use HasFactory;

    protected $table = 'notes_bien';
    protected $primaryKey = 'ID_NOTE';
    protected $fillable = [
        'ID_BIEN', 'NOM_VISITEUR', 'NOTE', 'COMMENTAIRE'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'ID_BIEN', 'ID_BIEN');
    }
}
