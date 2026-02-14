<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/whoami', function () {
    return Inertia::render('WhoAmI');
})->name('whoami');

Route::get('whoami/fit', function () {
    return Inertia::render('WhoAmI/Fit');
})->name('whoami.fit');
