<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', false)->latest()->paginate(15);
        return view('admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        if ($user->is_admin) {
            return back()->with('error', 'Tidak dapat menghapus akun admin.');
        }
        $user->delete();
        return back()->with('success', 'Pengguna berhasil dihapus.');
    }
}
