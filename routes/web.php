<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\AboutUsController::class, 'index'])->name('about-us');
Route::get('/contact-us', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contact-us');
Route::get('/our-services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::post('/sending-message', [App\Http\Controllers\ContactUsController::class, 'store'])->name('send-message');
Route::get('/successfully-sent', [App\Http\Controllers\SuccessController::class, 'success'])->name('success');
Route::get('/sending-failed', [App\Http\Controllers\SuccessController::class, 'failed'])->name('failed');