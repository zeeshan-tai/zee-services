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
//     return view('welcome');
// });


Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/about', 'Front\AboutController@index')->name('about');
Route::get('/services', 'Front\ServiceController@index')->name('service');
Route::get('/project', 'Front\ProjectController@index')->name('project');
Route::get('/testimonials','Front\TestimonialController@index')->name('testimonials');
Route::get('/team','Front\TeamController@index')->name('team');
Route::get('/contact', 'Front\ContactController@index')->name('contact');

