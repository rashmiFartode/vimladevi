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
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::resource('quicklink', 'QuickLinkController');
    Route::resource('notifications', 'NotificationController');
    Route::resource('etenders', 'EtenderController');
    Route::resource('news', 'NewsController');
    Route::resource('activities', 'ActivityController');
    Route::resource('blogs', 'BlogController');
    Route::resource('governmentSites', 'GovernmentSiteController');
    Route::resource('results', 'ResultController');
    Route::resource('galleries', 'GalleryCategoryController');

    Route::get('Gallery-image', 'MultipleUploadController@index')->name('galleryimage');
    Route::post('Gallery-image/upload', 'MultipleUploadController@upload')->name('upload');
    Route::delete('Gallery-image/{galleryMultiple}/delete', 'MultipleUploadController@destroy')->name('galleryimage.destroy');
    Route::resource('categories', 'CategoryController');
    Route::resource('photos', 'PhotoController');
});


Route::middleware(['auth','admin'])->group(function(){
    Route::get('users', 'UserController@index')->name('users.index');
    Route::post('users/{users}/make-admin', 'UserController@makeAdmin')->name('users.make-admin');
});
