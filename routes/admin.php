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
Route::get('about', 'Admin\AboutController@index')->name('about');
Route::resource('services', 'Admin\ServiceController');
Route::resource('project', 'Admin\ProjectController');
Route::resource('testimonials','Admin\TestimonialsController');
Route::resource('team','Admin\TeamController');
Route::get('contact', 'Admin\ContactController@index')->name('contact');
Route::resource('project-category','Admin\Project-categoryController');
Route::resource('gallery','Admin\GalleryController');