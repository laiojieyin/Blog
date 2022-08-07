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

Route::get('/', function () {
    return view('index');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/posts', function () {
//     $posts =[1,2,3];
//     return view('list',['posts'=>$posts]);
// });
Route::middleware(['auth'])->group(function () {

    Route::get('/posts/create', 'PostController@create');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{id}/edit', 'PostController@edit');
    Route::put('/posts/{id}', 'PostController@update');
    Route::delete('/posts/{id}', 'PostController@destroy');
    Route::get('/posts/{id}', 'PostController@show');
    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController')->only(['index', 'destroy']);
    Route::resource('comments', 'CommentController');
    Route::get('/admin', 'PostController@admin');
});


Route::get('/posts', 'PostController@index');
Route::get('/posts/categories/{category}', 'PostController@indexWithCategory');
Route::get('/posts/tags/{tag}', 'PostController@indexWithTag');

Route::get('/posts/{id}', 'PostController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
