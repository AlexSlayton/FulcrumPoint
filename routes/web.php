<?php

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

// Main Page Routes 
Route::get('/', 'PostsController@index');

Route::get('/contact', 'PostsController@contact');

Route::get('/services', 'PostsController@services');

Route::get('/about_us', 'PostsController@about_us');

// Service Routes 
Route::get('/services/automation', 'PostsController@automation');


// Route::get('/contact', function () {
//     return view('posts/contact');
// });
