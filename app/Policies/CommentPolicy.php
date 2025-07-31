<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    /**
     * Tentukan apakah user bisa menghapus komentar.
     */
    public function delete(User $user, Comment $comment): bool
    {
        // User bisa hapus jika dia pemilik komentar, ATAU pemilik postingan, ATAU admin.
        return $user->id === $comment->user_id
            || $user->id === $comment->post->user_id
            || $user->is_admin;
    }
}