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
    Route::resource('teachingStaffs', 'TeachingStaffController');
    Route::resource('blogs', 'BlogController');
    Route::resource('governmentSites', 'GovernmentSiteController');
    Route::resource('results', 'ResultController');
    Route::resource('galleries', 'GalleryCategoryController');

    Route::get('Gallery-image', 'MultipleUploadController@index')->name('galleryimage');
    Route::post('Gallery-image/upload', 'MultipleUploadController@upload')->name('upload');
    Route::delete('Gallery-image/{galleryMultiple}/delete', 'MultipleUploadController@destroy')->name('galleryimage.destroy');
    Route::resource('categories', 'CategoryController');
});


Route::middleware(['auth','admin'])->group(function(){
    Route::get('users', 'UserController@index')->name('users.index');
    Route::post('users/{users}/make-admin', 'UserController@makeAdmin')->name('users.make-admin');
});



Route::get('/', 'DesignController@index')->name('index');
Route::get('about', 'DesignController@about')->name('about');
Route::get('admissions', 'DesignController@admission')->name('admission');
Route::get('agad-tantra', 'DesignController@agad')->name('agad');
Route::get('attendance', 'DesignController@attendance')->name('attendance');
Route::get('ayurved', 'DesignController@ayurved')->name('ayurved');
Route::get('contact', 'DesignController@contact')->name('contact');
Route::get('cultural', 'DesignController@cultural')->name('cultural');
Route::get('dravyaguna', 'DesignController@dravyaguna')->name('dravuaguna');
Route::get('kaumarbhritya', 'DesignController@kaumarbhritya')->name('kaumarbhritya');
Route::get('kayachikitsa', 'DesignController@kayachikitsa')->name('kayachikitsa');
Route::get('kriya', 'DesignController@kriya')->name('kriya');
Route::get('madhumeh', 'DesignController@madhumeh')->name('madhumeh');
Route::get('medi_camp', 'DesignController@medi_camp')->name('medi_camp');
Route::get('panchkarma', 'DesignController@panchkarma')->name('panchkarma');
Route::get('permissions', 'DesignController@permission')->name('permission');
Route::get('prasuti', 'DesignController@prasuti')->name('prasuti');
Route::get('president_message', 'DesignController@president')->name('president');
Route::get('principal_message', 'DesignController@principal')->name('principal');
Route::get('rachana', 'DesignController@rachana')->name('rachana');
Route::get('result', 'DesignController@result')->name('result');
Route::get('rogNidan', 'DesignController@rognidan')->name('rognidan');
Route::get('shalakya', 'DesignController@shalakya')->name('shalakya');
Route::get('shalyatantra', 'DesignController@shalyatantra')->name('shalyatantra');
Route::get('shastra', 'DesignController@shastra')->name('shastra');
Route::get('sports', 'DesignController@sports')->name('sports');
Route::get('staff', 'DesignController@staff')->name('staff');
Route::get('swachhaBharat', 'DesignController@swachha_bharat')->name('swachha_bharat');
Route::get('yoga', 'DesignController@yoga')->name('yoga');


