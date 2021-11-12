<?php

use App\Http\Controllers\FrontController;

// Front route ---------

Route::get('/home',[FrontController::class,'home'])->name('home');
Route::get('/room',[FrontController::class,'room'])->name('room');
Route::get('room/{id}',[FrontController::class,'showRoom'])->name('show-room');
Route::get('/apartments',[FrontController::class,'apartments'])->name('apartments');
Route::get('/services',[FrontController::class,'services'])->name('services');
Route::get('/gallery',[FrontController::class,'gallery'])->name('gallery');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/reviews',[FrontController::class,'reviews'])->name('reviews');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/faq',[FrontController::class,'faq'])->name('faq');
Route::get('/satisfaction',[FrontController::class,'satisfaction'])->name('satisfaction');
Route::get('/cancellation',[FrontController::class,'cancellation'])->name('cancellation');
Route::get('/arrival',[FrontController::class,'arrival'])->name('arrival');
Route::get('/prague-sights',[FrontController::class,'pragueSights'])->name('pragueSights');
Route::get('/transfers',[FrontController::class,'transfers'])->name('transfers');
Route::get('/maids-services',[FrontController::class,'maidServices'])->name('maidServices');

// end Front route -------

// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('apartment', 'ApartmentCrudController');
    Route::crud('room', 'RoomCrudController');
}); // this should be the absolute last line of this file
