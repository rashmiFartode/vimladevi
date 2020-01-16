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

Route::middleware(['auth'])->group(function () {

    Route::resource('dashboard/quicklink', 'QuickLinkController');
    Route::resource('dashboard/dashboard/important_links', 'NotificationController');
    Route::resource('dashboard/etenders', 'EtenderController');
    Route::resource('dashboard/news', 'NewsController');
    Route::resource('dashboard/activities', 'ActivityController');
    Route::resource('dashboard/teachingStaffs', 'TeachingStaffController');
    Route::resource('dashboard/blogs', 'BlogController');
    Route::resource('dashboard/governmentSites', 'GovernmentSiteController');
    Route::resource('dashboard/results', 'ResultController');
    Route::resource('dashboard/attendances', 'AttendanceController');
    Route::resource('dashboard/gallery', 'GalleryController');

    Route::get('dashboard/Gallery-image', 'MultipleUploadController@index')->name('galleryimage');
    Route::post('dashboard/Gallery-image/upload', 'MultipleUploadController@upload')->name('upload');
    Route::delete('dashboard/Gallery-image/{galleryMultiple}/delete', 'MultipleUploadController@destroy')->name('galleryimage.destroy');
    Route::resource('dashboard/categories', 'CategoryController');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard/users', 'UserController@index')->name('users.index');
    Route::get('dashboard/users/create', 'UserController@create')->name('users.create');
    Route::post('dashboard/users/store', 'UserController@store')->name('users.store');
    Route::get('dashboard/users/profile', 'UserController@edit')->name('users.edit-profile');
    Route::put('dashboard/users/profile', 'UsewrController@update')->name('users.update-profile');
    Route::post('dashboard/users/{users}/make-admin', 'UserController@makeAdmin')->name('users.make-admin');
});



Route::get('/', 'DesignController@index')->name('index');
Route::get('about', 'DesignController@about')->name('about');
Route::get('admissions', 'DesignController@admission')->name('admission');
Route::get('agad-tantra', 'DesignController@agad')->name('agad');
Route::get('attendance', 'DesignController@attendance')->name('attendance');
Route::get('ayurved', 'DesignController@ayurved')->name('ayurved');
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
Route::get('swachhaBharat', 'DesignController@swachha_bharat')->name('swachhaBharat');
Route::get('yoga', 'DesignController@yoga')->name('yoga');
Route::get('news/{id}/show', 'DesignController@news')->name('news');
Route::get('recent_activity/{id}/show', 'DesignController@recent_activity')->name('recent_activity');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('send', 'ContactController@send')->name('send');
