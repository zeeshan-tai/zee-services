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
Route::get('/home', 'Admin\HomeController@index')->name('home');
Route::get('/about', 'Admin\AboutController@index')->name('about');
Route::get('/services', 'Admin\ServiceController@index')->name('service');
Route::get('/project', 'Admin\ProjectController@index')->name('project');
Route::get('/testimonials','Admin\TestimonialsController@index')->name('testimonials');
Route::get('/team','Admin\TeamController@index')->name('team');
Route::get('/contact', 'Admin\ContactController@index')->name('contact');
