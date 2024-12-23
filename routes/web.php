<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
Route::get('/{lang?}', [PageController::class, 'home'])->where('lang', 'ru|en|uz')->name('home');

Route::get('/{lang}', function ($lang){
    session()->put(['lang' => $lang]);
    return back();
})->where('lang', 'uz|ru|en');
Route::get('/{lang}/about', [PageController::class, 'about'])->name('about');
Route::get('/{lang}/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/{lang}/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blog-details');
Route::get('/booking', [PageController::class, 'booking'])->name('booking');
Route::get('/room/{lang}/{id}', [PageController::class, 'roomDetail'])->name('room-detail');

Route::post('/{lang}/roomdetailform', [\App\Http\Controllers\Auth\AuthController::class, 'roomdetailform'])->name('roomDetailForm');
Route::get('/{lang}/register', [\App\Http\Controllers\Auth\AuthController::class, 'register'])->name('register');
Route::post('/{lang}/registerPost', [\App\Http\Controllers\Auth\AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/{lang}/login', [\App\Http\Controllers\Auth\AuthController::class, 'login'])->name('login');
Route::post('/{lang}/loginPost', [\App\Http\Controllers\Auth\AuthController::class, 'loginPost'])->name('loginPost');
Route::post('/{lang}/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');



Route::get('/{lang}/profile/{id}', [\App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/{lang}/security/{id}', [\App\Http\Controllers\UserController::class, 'security'])->name('security');
Route::get('/{lang}/invoice/{id}', [\App\Http\Controllers\UserController::class, 'invoice'])->name('invoice');
Route::get('/{lang}/social/{id}', [\App\Http\Controllers\UserController::class, 'social'])->name('social');




Route::post('/{lang}/booking-all', [\App\Http\Controllers\BookingController::class, 'bookingAll'])->name('bookingAll');
