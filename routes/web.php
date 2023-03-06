<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// this is not working
// Route::get('/book', 'PageController@index');

Route::get('/documentation', [PageController::class,'showDocumentation'])->name('showDocumentation');
Route::get('/form', [PageController::class,'showForm'])->name('showForm');
Route::get('/fqa', [PageController::class,'showFQA'])->name('showFQA');
Route::get('/executive', [PageController::class,'showExecutive'])->name('showExecutive');
Route::get('/council', [PageController::class,'showCouncil'])->name('showCouncil');
Route::get('/about', [PageController::class,'showAbout'])->name('showAbout');
Route::get('/contact', [PageController::class,'showContact'])->name('showContact');