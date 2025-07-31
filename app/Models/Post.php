<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Atribut yang boleh diisi secara massal.
     * 'user_id' penting untuk menghubungkan post dengan pemiliknya.
     */
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    /**
     * Relasi: Satu Post dimiliki oleh satu User.
     * Nama method: user() (singular)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi: Satu Post bisa memiliki banyak Comment.
     * Nama method: comments() (plural)
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}