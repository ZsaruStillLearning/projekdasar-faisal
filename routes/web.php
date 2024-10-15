<?php

use Illuminate\Support\Facades\Route;

Route::get('/halo', [App\Http\Controllers\HalamanController::class, 'selamatDatang']);

