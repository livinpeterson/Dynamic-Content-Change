<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogPostController;


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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/services', [ServicesController::class,'service'])->name('services');
Route::get('/portfolio', [PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('/blogpost', [BlogPostController::class,'blogpost'])->name('blogpost');

Route::get('/about-us', function () {
    return view('pages.about_us');
})->name('aboutus');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
