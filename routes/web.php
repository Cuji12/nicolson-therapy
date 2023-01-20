<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('site.index');
    Route::get('/about', 'about')->name('site.about');
    Route::get('/blog', 'blog')->name('site.blog');
    Route::get('/blog/{blog}', 'blogShow')->name('site.blog-show');
    Route::get('/contact', 'contact')->name('site.contact');
    Route::get('/faqs', 'faqs')->name('site.faqs');
    Route::get('/testimonials', 'testimonials')->name('site.testimonials');
    Route::get('/therapy-contract', 'therapyContract')->name('site.therapy-contract');
    
    Route::post('/contact', 'post')->name('site.post');
});