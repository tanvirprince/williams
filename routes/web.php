<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::group(['namespace'=>'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('homepage');
    Route::get('management', 'HomeController@management')->name('management');
    Route::get('certification', 'HomeController@certification')->name('certification');
    Route::get('gallery', 'HomeController@gallery')->name('gallery');
    Route::get('gallery/{slug}', 'HomeController@singleGallery')->name('single-gallery');
    Route::get('contact', 'HomeController@contact')->name('contact');
    Route::get('our-story', 'HomeController@ourstory')->name('ourstory');
    Route::get('sustainability', 'HomeController@sustainability')->name('sustainability');
    Route::post('mail', 'SendMailController@mail')->name('mail');

});


Auth::routes();

Route::group(['middleware'=>'auth', 'namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('service', 'ServiceController');
    Route::resource('galleries', 'GalleryController');
    Route::get('galleries/delete/{id}', 'GalleryController@delete')->name('galleries.delete');
    Route::get('service/delete/{id}', 'ServiceController@delete')->name('service.delete');
    Route::resource('sliders', 'SliderController');
    Route::get('sliders/delete/{id}', 'SliderController@delete')->name('sliders.delete');
    Route::resource('certificates', 'CertificateController');
    Route::get('certificates/delete/{id}', 'CertificateController@delete')->name('certificates.delete');
    Route::resource('brand', 'BrandController');
    Route::resource('about', 'AboutController');
    Route::get('brand/delete/{id}', 'BrandController@delete')->name('brand.delete');
    
    Route::get('managements', 'ManagementController@create')->name('managements.create');
    Route::post('managements', 'ManagementController@store')->name('managements.store');
    Route::put('managements/{id}', 'ManagementController@update')->name('managements.update');

    Route::resource('management2', 'Management2Controller');
    Route::resource('management3', 'Management3Controller');

    Route::resource('sustainabilities', 'SustainabilityController');
    Route::get('sustainabilities/delete/{id}', 'SustainabilityController@delete')->name('sustainabilities.delete');
});


// Route::get('link', function () {
//     Artisan::call('storage:link');
//     return "Link Storage successfully!";
// });

Route::get('link', function () {
    Artisan::call('storage:link');
});
Route::get('cache', function () {
    Artisan::call('cache:clear');
});
Route::get('config', function () {
    Artisan::call('config:clear');
});
Route::get('route', function () {
    Artisan::call('route:clear');
});