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
Route::get('/', 'HomeController@index')->name('page');

Route::get('/site/page/{slug?}', 'SiteController@page')->name('page');
Route::get('/site/article/{slug?}', 'SiteController@article')->name('article');
Route::get('/site/professors', 'SiteController@professors')->name('professors');
Route::get('/site/professors/{id}', 'SiteController@professor')->name('professor');
Route::get('/site/disciplines', 'SiteController@disciplines')->name('disciplines');
Route::get('/site/disciplines/{id}', 'SiteController@discipline')->name('discipline');
Route::get('/site/about', function () {
    return view('site.about');
});
Route::get('/site/contact-us', 'ContactUsController@contactUs');
Route::post('site/contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);

//Route::group(['prefix'=>'admin', 'namespace'=>'Admin','middleware'=>['auth']], function (){
//    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
//    Route::resource('/page','PageController', ['as'=>'admin']);
//    Route::resource('/article','ArticleController', ['as'=>'admin']);
//    Route::resource('/discipline','DisciplineController', ['as'=>'admin']);
//    Route::resource('/professor','ProfessorController', ['as'=>'admin']);
//});
Route::group(['middleware' => 'is.admin'], function () {
    Route::get('admin', 'Admin\DashboardController@dashboard')->name('admin.index');
    Route::resource('/page','Admin\PageController', ['as'=>'admin']);
    Route::resource('/article','Admin\ArticleController', ['as'=>'admin']);
    Route::resource('/discipline','Admin\DisciplineController', ['as'=>'admin']);
    Route::resource('/professor','Admin\ProfessorController', ['as'=>'admin']);
    Route::resource('/message','ContactUsController',['as'=>'admin']);
});

