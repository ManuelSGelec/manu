<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\curriculum;

Route::get('/', [curriculum::class, 'index'])->name('curriculum');
