<?php

use App\Http\Controllers\ContactController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'fr')->name('landing');

Route::prefix('{locale}')
    ->where(['locale' => 'fr|en'])
    ->middleware(SetLocale::class)
    ->group(function (): void {
        Route::view('/', 'home')->name('home');
        Route::view('/entreprise', 'company')->name('company');
        Route::view('/services', 'services')->name('services');
        Route::view('/solutions/securite-electronique', 'electronic-security')->name('electronic-security');
        Route::view('/formations', 'training')->name('training');
        Route::view('/realisations', 'projects')->name('projects');
        Route::view('/annexes', 'annexes')->name('annexes');
        Route::view('/ressources', 'resources')->name('resources');
        Route::view('/contact', 'contact')->name('contact');
        Route::view('/politique-de-confidentialite', 'legal.privacy')->name('privacy');
        Route::view('/politique-de-cookies', 'legal.cookies')->name('cookies');
        Route::view('/mentions-legales', 'legal.legal-notice')->name('legal-notice');

        Route::post('/contact', ContactController::class)
            ->middleware('throttle:5,1')
            ->name('contact.store');
    });
