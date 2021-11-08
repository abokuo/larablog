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

// 內容顯示
Route::get('/', 'App\Http\Controllers\PostController@renderHomePage')->name('home');
Route::get('/blog', 'App\Http\Controllers\PostController@renderBlogIndex')->name('blog');
Route::get('/blog/{slug}', 'App\Http\Controllers\PostController@renderBlogPage')->name('post');
Route::get('/tag/{slug}', 'App\Http\Controllers\PostController@renderBlogByTag');
Route::get('/category/{slug}', 'App\Http\Controllers\PostController@renderBlogByCategory')->name('category');

// 固定頁面
Route::view('/about', 'about')->name('about');

// 搜尋
Route::get('/search', 'App\Http\Controllers\SiteController@search')->name('search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// 網站文件
Route::get('/{slug}', 'App\Http\Controllers\PostController@renderSinglePage')->name('single');

// 回應操作
Route::post('/comment/add/{slug}', 'App\Http\Controllers\CommentController@addComment');
Route::get('/comment/{id}', 'App\Http\Controllers\CommentController@deleteComment');

// 聯絡表單
Route::post('/contact/add', 'App\Http\Controllers\ContactController@addContact');

// 前台登入
Route::group(['prefix' => 'auth'], function(){
    //登入
    Route::get('/login', 'App\Http\Controllers\UserController@logInPage')->name('login');
    //登入處理
    Route::post('/login', 'App\Http\Controllers\UserController@logInProcess');
    //登出
    Route::get('/logout', 'App\Http\Controllers\UserController@logOut')->name('logout');
});

// 作品集
Route::group(['prefix' => 'about/portfolio'], function(){
    Route::view('/joomla17-book', 'portfolio.joomla17-book');
    Route::view('/joomla25-book', 'portfolio.joomla25-book');
    Route::view('/joomla25-pp-book', 'portfolio.joomla25-pp-book');
    Route::view('/joomla3-book', 'portfolio.joomla3-book');
    Route::view('/j2store-book', 'portfolio.j2store-book');
    Route::view('/website-hdts', 'portfolio.website-hdts');
    Route::view('/website-abo-tw', 'portfolio.website-abo-tw');
    Route::view('/website-ffxitoolbox', 'portfolio.website-ffxitoolbox');
    Route::view('/website-larablog', 'portfolio.website-larablog');
});

// 建立 sitemap
Route::get('/utilities/createsitemap', 'App\Http\Controllers\SiteController@createSitemap');
