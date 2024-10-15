<?php

use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegistration;
use App\Livewire\Director\DirectorDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', AuthRegistration::class)->name('register');
Route::get('/login', AuthLogin::class)->name('login');


// DIRECTOR
Route::get('/director-dashboard', DirectorDashboard::class)->name('director-dashboard');
