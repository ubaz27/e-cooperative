<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('book');
});
// this is not working
// Route::get('/book', 'PageController@index');

Route::get('/documentation', [PageController::class,'showDocumentation'])->name('showDocumentation');
Route::get('/form', [PageController::class,'showForm'])->name('showForm');
Route::get('/fqa', [PageController::class,'showFQA'])->name('showFQA');
Route::get('/executive', [PageController::class,'showExecutive'])->name('showExecutive');
Route::get('/council', [PageController::class,'showCouncil'])->name('showCouncil');
Route::get('/about', [AboutController::class,'showAbout'])->name('showAbout');
Route::get('/contact', [ContactController::class,'showContact'])->name('showContact');
Route::get('/contact2', [ContactController::class,'showContact2'])->name('showContact2');

// this is working for saving to database successfully
 Route::post('/sendMessage', [ContactController::class,'sendMessage'])->name('sendMessage');
 //Route::post('/contact2', [ContactController::class,'sendMessage2'])->name('sendMessage2');


Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');