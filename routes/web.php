<?php

use App\Models\Bundle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Offer;
use App\Livewire\Login\HomeLogin;
use App\Livewire\Login\HomeRegister;

Route::localized(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/offers', 'offers')->name('offers');
        Route::get('/packages', 'packages')->name('packages');
        // Route::get('/packages2', 'packages2')->name('packages');
        Route::get('/analysis', 'analysis')->name('analysis');
        // Route::get('/devices', 'devices')->name('devices');
        // Route::get('/contact', 'contact')->name('contact');

    });

    // Route::controller(RegisterController::class)->group(function () {
    //     Route::get('/register', 'index')->name('register-index');
    //     Route::get('/register/{registration}', 'follow')->name('register-follow');
    // });

    // Route::get('/homeLogin', 'homeLogin')->name('homeLogin');

    Route::get('/packages/{id}', function ($id) {
        $package = Bundle::findOrFail($id);
        return view('packages.show', ['package' => $package]);
    });



    Route::get('/offer/{id}', function ($id) {
        $offer = Offer::findOrFail($id);
        return view('offers.show', ['offer' => $offer]);
    });
});

// Route::post('/contact', [Store::class, 'store'])->name('store');

Route::controller(PostController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/{slug}', 'show')->name('post');
    // Route::get('/blog/author/{author:username}', 'author')->name('author');
});


// Route::get('/home-register', HomeRegister::class)->name('home-register');

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');
