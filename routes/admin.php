<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function () {
//     dd('haekjasd');
// });

Route::get('/', 'Admin\DashboardController@index')->name('dashboard');

Route::resource('home', 'Admin\HomeController');
// Route::get('about', 'Admin\AboutController@index')->name('about');
Route::resource('service', 'Admin\ServiceController');

Route::resource('project', 'Admin\ProjectController');
Route::resource('testimonials','Admin\TestimonialController');
Route::resource('team','Admin\TeamController');
Route::get('contact', 'Admin\ContactQueriesController@index')->name('contact');
Route::resource('project-category','Admin\ProjectCategoryController');
Route::resource('gallery','Admin\GalleryController');
Route::get('newsletter','Admin\NewsletterController@index')->name('newsletter');
