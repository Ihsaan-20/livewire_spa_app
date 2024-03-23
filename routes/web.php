<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Logout;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/logout', Logout::class)->name('logout');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');



