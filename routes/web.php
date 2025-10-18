<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/services', [WebsiteController::class, 'services'])->name('website.services');
Route::get('/fleet', [WebsiteController::class, 'fleet'])->name('website.fleet');
Route::get('/locations', [WebsiteController::class, 'locations'])->name('website.locations');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::post('/contact', [WebsiteController::class, 'contactSubmit'])->name('website.contact.submit');
