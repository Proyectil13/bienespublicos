<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BienesController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('bienes', BienesController::class)->names('admin.bienes');