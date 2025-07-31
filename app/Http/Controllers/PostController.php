<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate; // Penting untuk otorisasi

class PostController extends Controller
{
    /**
     * Menampilkan daftar semua postingan forum.
     */
    public function index()
    {
        // Ambil semua post, urutkan dari yang terbaru.
        // Eager load relasi 'user' dan 'comments' untuk efisiensi query (mengatasi N+1 problem)
        $posts = Post::with('user', 'comments')->latest()->paginate(10);

        return view('forum.index', compact('posts'));
    }

    /**
     * Menampilkan form untuk membuat postingan baru.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Menyimpan postingan baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'body' => 'required|string|min:20',
        ]);

        // Tambahkan user_id dari user yang sedang login
        $request->user()->posts()->create($validated);

        return redirect()->route('forum.index')->with('success', 'Postingan baru berhasil dibuat!');
    }

    /**
     * Menampilkan satu postingan spesifik beserta komentarnya.
     */
    public function show(Post $post)
    {
        // Eager load comments dan user yang berkomentar
        $post->load('comments.user');
        return view('forum.show', compact('post'));
    }

    /**
     * Menampilkan form untuk mengedit postingan.
     */
    public function edit(Post $post)
    {
        // Pastikan hanya pemilik post yang bisa mengakses halaman edit
        Gate::authorize('update', $post);

        return view('forum.edit', compact('post'));
    }

    /**
     * Memperbarui postingan di database.
     */
    public function update(Request $request, Post $post)
    {
        // Otorisasi
        Gate::authorize('update', $post);

        $validated = $request->validate([
            'title' => 'required|string|min:5|max:255',
            'body' => 'required|string|min:20',
        ]);

        $post->update($validated);

        return redirect()->route('forum.show', $post)->with('success', 'Postingan berhasil diperbarui.');
    }

    /**
     * Menghapus postingan dari database.
     */
    public function destroy(Post $post)
    {
        // Otorisasi
        Gate::authorize('delete', $post);

        $post->delete();

        return redirect()->route('forum.index')->with('success', 'Postingan berhasil dihapus.');
    }
}