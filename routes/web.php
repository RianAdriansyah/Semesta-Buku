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

Auth::routes(['register' => true]);


Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:admin']], function () {
    Route::resource('/buku', 'BukuController');
    Route::resource('/tag', 'TagController');
    Route::resource('/kategori', 'KategoriController');
    Route::resource('/artikel', 'ArtikelController');
    Route::resource('/review', 'ReviewController');
    Route::resource('/user', 'UserController');
});
Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:admin||member']], function () {

    Route::resource('/review', 'ReviewController');
});
Route::group(['prefix' => '/', 'middleware' => ['auth', 'role:admin||member']], function () {

    Route::resource('/reviewsaya', 'ReviewsayaController');
});


Route::resource('/', 'FrontendController');
Route::get('/buku', 'FrontendController@buku')->name('buku');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/review', 'FrontendController@review')->name('review');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/buku/{buku}', 'FrontendController@buku_single')->name('buku_single');
Route::post('/buku/{buku}', 'FrontendController@rev_store')->name('tambah');

Route::get('/blog/{artikel}', 'FrontendController@blog_single')->name('blog_single');
Route::get('/review/{review}', 'FrontendController@review_single')->name('review_single');
Route::get('/buku/kategori/{kategori}', 'FrontendController@catbuku')->name('kategoribuku');
Route::get('/buku/tag/{tag}', 'FrontendController@tagbuku')->name('tagbuku');
Route::get('/review/tag/{tag}', 'FrontendController@tagreview')->name('tagreview');
Route::get('/blog/tag/{tag}', 'FrontendController@tagblog')->name('tagblog');


Route::get('/home', 'HomeController@index')->name('home');
