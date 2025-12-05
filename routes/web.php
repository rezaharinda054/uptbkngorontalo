<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/home', function () {
    return view('layouts/wrapper',[
        'content' => 'home/index'
    ]);
});

// Portofolio
Route::get('/portofolio', function () {
    return view('layouts/wrapper',[
        'content' => 'portofolio/index'
    ]);
});

// Profil
Route::get('/sejarah', function () {
    return view('layouts/wrapper',[
        'content' => 'sejarah/index'
    ]);
});

Route::get('/tupoksi', function () {
    return view('layouts/wrapper',[
        'content' => 'tupoksi/index'
    ]);
});

// Layanan Publik
Route::get('/layanan_konsultasi', function () {
    return view('layouts/wrapper',[
        'content' => 'layanan_konsultasi/index'
    ]);
});

Route::get('/maklumat_pelayanan_kanreg_xi', function () {
    return view('layouts/wrapper',[
        'content' => 'maklumat_pelayanan_kanreg_xi/index'
    ]);
});

Route::get('/standar_pelayanan_kanregxi_bkn', function () {
    return view('layouts/wrapper',[
        'content' => 'standar_pelayanan_kanregxi_bkn/index'
    ]);
});

//kegiatan
Route::get('/assesment', function () {
    return view('layouts/wrapper',[
        'content' => 'assesment/index'
    ]);
});

Route::get('/cat', function () {
    return view('layouts/wrapper',[
        'content' => 'cat/index'
    ]);
});

Route::get('/pemanfaatan_stasiun_cat', function () {
    return view('layouts/wrapper',[
        'content' => 'pemanfaatan_stasiun_cat/index'
    ]);
});

Route::get('/seleksi_cpns', function () {
    return view('layouts/wrapper',[
        'content' => 'seleksi_cpns/index'
    ]);
});

Route::get('/seleksi_sekolah_kedinasan', function () {
    return view('layouts/wrapper',[
        'content' => 'seleksi_sekolah_kedinasan/index'
    ]);
});

Route::get('/seleksi_selain_asn', function () {
    return view('layouts/wrapper',[
        'content' => 'seleksi_selain_asn/index'
    ]);
});

Route::get('/simulasi_cat_bkn', function () {
    return view('layouts/wrapper',[
        'content' => 'simulasi_cat_bkn/index'
    ]);
});

Route::get('/ujian_kedinasan', function () {
    return view('layouts/wrapper',[
        'content' => 'ujian_kedinasan/index'
    ]);
});

// Informasi
Route::get('/berita', function () {
    return view('layouts/wrapper',[
        'content' => 'berita/index'
    ]);
});

Route::get('/berita-page2', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-page2/index'
    ]);
});

Route::get('/berita-page3', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-page3/index'
    ]);
});

Route::get('/berita-page4', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-page4/index'
    ]);
});

Route::get('/artikel', function () {
    return view('layouts/wrapper',[
        'content' => 'artikel/index'
    ]);
});

Route::get('/pengumuman', function () {
    return view('layouts/wrapper',[
        'content' => 'pengumuman/index'
    ]);
});

Route::get('/video', function () {
    return view('layouts/wrapper',[
        'content' => 'video/index'
    ]);
});

// IKM
Route::get('/ikm', function () {
    return view('layouts/wrapper',[
        'content' => 'ikm/hasil_survey'
    ]);
});

// Berita Oktober 2025
Route::get('/berita-5nov2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-5nov2025/udin5nov'
    ]);
});

// Berita November 2025 
Route::get('/berita-5nov2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-5nov2025/udin5nov'
    ]);
});










