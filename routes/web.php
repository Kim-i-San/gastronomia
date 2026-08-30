<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/en');
});

Route::prefix('{locale}')
    ->where(['locale' => 'en|fr|de|it'])
    ->middleware('locale')
    ->group(function () {

        Route::view('/', 'home')
            ->name('home');

        Route::view('/product', 'product')
            ->name('product');

        Route::view('/pricing', 'pricing')
    ->name('pricing');

        Route::view('/contact', 'contact')
    ->name('contact');

    Route::view('/legal', 'legal')
    ->name('legal');


    });