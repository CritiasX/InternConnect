<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Dotenv\Exception\ValidationException;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class AuthController extends Controller
{   
    // L O G I N 
    public function login(Request $request){
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials) && Auth::user()->role == 0) {
            $request->session()->regenerate();
            return redirect()->route('show.student');
        }elseif(Auth::attempt($credentials) && Auth::user()->role == 1){
            $request->session()->regenerate();
            return redirect()->route('show.hte');
        }
        elseif(Auth::attempt($credentials) && Auth::user()->role == 2){
            $request->session()->regenerate();
            return redirect()->route('show.sip');
        }

        throw ValidationValidationException::withMessages([
            'credentials' => 'Sorry, Incorrect credentials'
        ]);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // L O G O U T
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended();
    }


    // R E G I S T E R
    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string'
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>0,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('show.student');
    }
}