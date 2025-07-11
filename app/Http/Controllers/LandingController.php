<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function showLogin(){
        return view('login');
    }
    public function showRegister(){
        return view('register');
    }
    public function showLanding(){
        return view('welcome');
    }
    public function showHome(){
        return view('dashboard.student');
    }
    public function showHTE(){
        return view('dashboard.hte');
    }
    public function showSip(){
        return view('dashboard.sip');
    }
}
