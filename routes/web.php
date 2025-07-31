<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController as PublicArticleController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\ForumController as AdminForumController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;

/*
|--------------------------------------------------------------------------
| Halaman Publik (Dapat diakses semua orang)
|--------------------------------------------------------------------------
*/
// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');

// Authenticated user routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/produk', [PageController::class, 'produk'])->name('produk');
Route::get('/app', [PageController::class, 'app'])->name('app.features');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/articles', [PublicArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{article:slug}', [PublicArticleController::class, 'show'])->name('articles.show');


/*
|--------------------------------------------------------------------------
| Fitur yang Membutuhkan Login (Pengguna Biasa & Admin)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Rute untuk Forum Publik (CRUD Post & Komentar)
    Route::resource('forum', PostController::class);
    Route::post('/forum/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});


/*
|--------------------------------------------------------------------------
| Rute Autentikasi (Login, Register, Dashboard, dll dari Breeze)
|--------------------------------------------------------------------------
| File ini mendefinisikan rute '/dashboard' yang Anda butuhkan.
*/
require __DIR__.'/auth.php';


/*
|--------------------------------------------------------------------------
| Rute Khusus Admin (Dilindungi middleware 'auth' dan 'admin')
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin (menggunakan nama 'admin.dashboard' agar tidak konflik)
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Manajemen Pengguna
    Route::resource('users', AdminUserController::class)->only(['index', 'destroy']);

    // Manajemen Pesan
    Route::resource('messages', AdminMessageController::class)->only(['index', 'show', 'destroy']);
    
    // Manajemen Forum oleh Admin
    Route::get('/forum', [AdminForumController::class, 'index'])->name('forum.index');
    Route::delete('/forum/posts/{post}', [AdminForumController::class, 'destroyPost'])->name('forum.posts.destroy');
    Route::delete('/forum/comments/{comment}', [AdminForumController::class, 'destroyComment'])->name('forum.comments.destroy');

    // Manajemen Artikel oleh Admin
    Route::resource('articles', AdminArticleController::class);
});
