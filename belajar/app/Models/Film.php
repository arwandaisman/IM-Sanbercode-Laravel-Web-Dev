<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $table="film";
    protected $fillable = ['judul','ringkasan','tahun','poster','genre_id'];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class,'genre_id');
    }

    public function Comments()
    {
        return $this->hasMany(Comments::class, 'user_id');
    }
}
