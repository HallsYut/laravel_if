<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('if');
});

Route::get('/if_detail/{id}', function ($id) {
    return view('if_detail', compact('id'));
});