<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Model;


class Comments extends Model
{
    use HasFactory;

    protected $table="kritik";
    protected $fillable = ['user_id','film_id','content'];

    public function user()
    {
        return $this->belongsTo(User::class, 'film_id');
    }
}
