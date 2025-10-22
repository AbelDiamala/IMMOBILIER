<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $primaryKey = 'ID_VIDEO';
    protected $fillable = [
        'ID_BIEN', 'URL_VIDEO'
    ];

    public function bien()
    {
        return $this->belongsTo(Bien::class, 'ID_BIEN', 'ID_BIEN');
    }
}
