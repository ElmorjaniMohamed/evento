<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    public function block(User $user)
    {
        $user->block();
        return redirect()->back()->with('success', 'User blocked successfully');
    }

    public function unblock(User $user)
    {
        $user->unblock();
        return redirect()->back()->with('success', 'User unblocked successfully');
    }
}
