<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form']);
Route::post('/lapor-banjir/simpan', [LaporBanjirController::class, 'simpan']);