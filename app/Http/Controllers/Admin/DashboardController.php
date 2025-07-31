<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'users' => User::count(),
            'posts' => Post::count(),
            'messages' => Message::count(),
        ];
        
        $latestMessages = Message::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'latestMessages'));
    }
}   
