<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Atribut yang boleh diisi secara massal.
     * 'user_id' untuk tahu siapa yang berkomentar.
     * 'post_id' untuk tahu komentar ini ada di post mana.
     */
    protected $fillable = [
        'body',
        'user_id',
        'post_id',
    ];

    /**
     * Relasi: Satu Comment dimiliki oleh satu User.
     * Nama method: user() (singular)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi: Satu Comment dimiliki oleh satu Post.
     * Nama method: post() (singular)
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}