<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Students;

Route::get('/students', function () {
    return response()->json(Students::all());
});

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});
