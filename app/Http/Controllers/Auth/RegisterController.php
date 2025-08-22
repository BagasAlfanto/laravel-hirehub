<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:pencari,penyedia'
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        $credentials['uid'] = Str::uuid()->toString();

        User::create($credentials);

        // return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login.');
        return redirect()->route('register.index')->with('show_success', true);
    }
}
