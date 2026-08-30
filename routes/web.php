<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $locale = request()->getPreferredLanguage(['en', 'fr', 'de', 'it']) ?? 'en';

    return redirect("/{$locale}");
});

Route::get('/aligro', function () {
    $locale = request()->getPreferredLanguage(['en', 'fr', 'de', 'it']) ?? 'en';

    return redirect("/{$locale}/aligro");
});

Route::get('/faq', function () {
    $locale = request()->getPreferredLanguage(['en', 'fr', 'de', 'it']) ?? 'en';

    return redirect("/{$locale}/faq");
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

    Route::view('/aligro', 'aligro')->name('aligro');

    Route::view('/faq', 'faq')->name('faq');


    });