<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});


route::middleware(['auth'])->group(function(){
    route::get('home', function(){
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('home');
});
