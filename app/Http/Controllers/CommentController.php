<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    /**
     * Menyimpan komentar baru untuk sebuah post.
     */
    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'body' => 'required|string|min:3',
        ]);

        $post->comments()->create([
            'body' => $validated['body'],
            'user_id' => auth()->id(),
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan.');
    }

    /**
     * Menghapus sebuah komentar.
     */
    public function destroy(Comment $comment)
    {
        // Otorisasi: Pastikan hanya pemilik komentar yang bisa menghapus
        Gate::authorize('delete', $comment);

        $comment->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}
