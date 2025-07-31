<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::published()->latest()->paginate(9);
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        // Pastikan hanya artikel yang sudah publish yang bisa diakses
        if (!$article->published_at) {
            abort(404);
        }
        return view('articles.show', compact('article'));
    }
}
