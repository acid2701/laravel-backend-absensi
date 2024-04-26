<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});


route::middleware(['auth'])->group(function(){
    route::get('home', function(){
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('home');

    Route::resource('users', UserController::class);
});
