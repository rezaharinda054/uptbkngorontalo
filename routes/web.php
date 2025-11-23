<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('layouts/wrapper',[
        'content' => 'home/index'
    ]);
});

Route::get('/portofolio', function () {
    return view('layouts/wrapper',[
        'content' => 'portofolio/index'
    ]);
});

Route::get('/profil/sejarah', function () {
    return view('layouts/wrapper',[
        'content' => 'profil/sejarah'
    ]);
});