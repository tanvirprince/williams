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
    Route::get('brand/delete/{id}', 'BrandController@delete')->name('brand.delete');

});

