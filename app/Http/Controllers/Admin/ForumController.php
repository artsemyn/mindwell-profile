<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments')->latest()->paginate(15);
        return view('admin.forum.index', compact('posts'));
    }

    public function destroyPost(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Postingan berhasil dihapus.');
    }

    public function destroyComment(Comment $comment)
    {
        $comment->delete();
        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}
