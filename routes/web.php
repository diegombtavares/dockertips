<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas.index');
});

Route::get('/about', function () {
    return view('paginas.about');
});

Route::get('/utilizacao', function () {
    return view('paginas.utilizacao');
});

# Teste de commit 