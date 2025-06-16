<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'string', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'string', 'min:8', 'max:200', 'confirmed']
        ]);

        // Hash the password
        $incomingFields['password'] = bcrypt($incomingFields['password']);

        $user = User::create($incomingFields);

        Auth::login($user);

        return redirect()->route('show.landing');
    }
}