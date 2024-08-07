<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table="genre";
    protected $fillable = ['nama'];

    public function listFilm(): HasMany
    {
        return $this->hasMany(Film::class, 'genre_id');
    }
}
