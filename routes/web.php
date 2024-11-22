<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn ()  => view('welcome'));
Route::post('upload', UploadController::class)->name('upload');
