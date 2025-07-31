<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
        }

        Article::create([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'image_path' => $path,
            'published_at' => isset($validated['is_published']) ? now() : null,
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dibuat.');
    }

    public function show(Article $article)
    {
        // Redirect ke halaman edit karena tidak ada halaman show di admin
        return redirect()->route('admin.articles.edit', $article);
    }


    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_published' => 'nullable|boolean',
        ]);

        $path = $article->image_path;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('image')->store('articles', 'public');
        }

        $article->update([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'image_path' => $path,
            'published_at' => (isset($validated['is_published']) && !$article->published_at) ? now() : ($article->published_at ?? null),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        // Hapus gambar dari storage
        if ($article->image_path) {
            Storage::disk('public')->delete($article->image_path);
        }
        
        $article->delete();
        return back()->with('success', 'Artikel berhasil dihapus.');
    }
}
