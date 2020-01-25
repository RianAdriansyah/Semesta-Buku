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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::resource('/buku', 'BukuController');
    Route::resource('/genre', 'GenreController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/review', 'ReviewController');
});
Route::resource('/', 'FrontendController');
Route::get('/buku', 'FrontendController@buku')->name('buku');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/review', 'FrontendController@review')->name('review');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/buku/{buku}', 'FrontendController@buku_single')->name('buku_single');
Route::get('/blog/{artikel}', 'FrontendController@blog_single')->name('blog_single');
Route::get('/review/review_single', 'FrontendController@review_single')->name('review_single');


Route::get('/home', 'HomeController@index')->name('home');
