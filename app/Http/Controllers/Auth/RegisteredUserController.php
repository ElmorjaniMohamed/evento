<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'image' => ['image'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('public/avatars/', $imageName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imageName,
            'password' => Hash::make($request->password),
        ]);

        if ($request->has('user_role')) {
            $roleName = $request->user_role;
            $role = Role::where('name', $roleName)->first();

            if ($role) {
                $user->assignRole($role);
            }
        }

        event(new Registered($user));

        if ($user->hasRole('Administrator') || $user->hasRole('Organizer')) {
            return redirect('dashboard');
        } elseif ($user->hasRole('User')) {
            return redirect()->route('home');
        } else {
            return redirect('/login');
        }
    }
}