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

Route::get('/', function () {
    return view('site.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/site/page/{slug?}', 'SiteController@page')->name('page');
Route::get('/site/article/{slug?}', 'SiteController@article')->name('article');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/page','PageController', ['as'=>'admin']);
    Route::resource('/article','ArticleController', ['as'=>'admin']);
});

