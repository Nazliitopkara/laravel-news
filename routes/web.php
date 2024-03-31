<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;

Route::get('/', [Homepage::class, 'index'])->name('homepage');
Route::get('/blog/{slug}', [Homepage::class, 'single'])->name('single');



//Route::get('/', 'Front\Homepage@index')->name('homepage');
