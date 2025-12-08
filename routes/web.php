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

// Berita Agustus 2025
Route::get('/berita-udin29ags2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-udin29ags2025/udin29ags'
    ]);
});

// Berita September 2025
Route::get('/berita-udin9sep2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-udin9sep2025/udin9sep'
    ]);
});

Route::get('/berita-cat10sep2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-cat10sep2025/cat10sep'
    ]);
});

Route::get('/berita-ptbstmkg16sep2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-ptbstmkg16sep2025/ptbstmkg16sep'
    ]);
});

Route::get('/berita-udin17sep2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-udin17sep2025/udin17sep'
    ]);
});


// Berita Oktober 2025
Route::get('/berita-pancasila1okt2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-pancasila1okt2025/pancasila1okt'
    ]);
});

Route::get('/berita-udin9okt2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-udin9okt2025/udin9okt'
    ]);
});

Route::get('/berita-ikd24okt2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-ikd24okt2025/ikd24okt'
    ]);
});

Route::get('/berita-lptui23okt2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-lptui23okt2025/lptui23okt'
    ]);
});

Route::get('/berita-udin30okt2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-udin30okt2025/udin30okt'
    ]);
});

Route::get('/berita-udin31okt2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-udin31okt2025/udin31okt'
    ]);
});

// Berita November 2025 
Route::get('/berita-5nov2025', function () {
    return view('layouts/wrapper',[
        'content' => 'berita-5nov2025/udin5nov'
    ]);
});

// Pengumuman Agustus 2025
Route::get('/pengumuman-sekdin7ags2025', function () {
    return view('layouts/wrapper',[
        'content' => 'pengumuman-sekdin7ags2025/pengumuman-sekdin7ags'
    ]);
});

// Pengumuman Juli 2025
Route::get('/pengumuman-sekdin1juli2025', function () {
    return view('layouts/wrapper',[
        'content' => 'pengumuman-sekdin1juli2025/pengumuman-sekdin1juli'
    ]);
});

// ikm-form
Route::get('/ikm-form', function () {
    return view('layouts/wrapper',[
        'content' => 'ikm-form/ikmform'
    ]);
});








