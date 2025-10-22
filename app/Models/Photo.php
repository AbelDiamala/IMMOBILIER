<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';
    protected $primaryKey = 'ID_PHOTO';
    protected $fillable = [
        'ID_BIEN', 'URL_PHOTO', 'ORDRE'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'ID_BIEN', 'ID_BIEN');
    }
}
