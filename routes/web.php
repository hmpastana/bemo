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

Auth::routes();

Route::group(['prefix' => '/', 'middleware' => 'auth'], function() {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('contact-us', 'ContactUsController@index')->name('contact-us');
    Route::post('contact-us-mail', 'ContactUsController@sendMail')->name('contact-us-mail');

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
        Route::group(['prefix' => 'home'], function(){
            Route::get('/', 'HomeController@index')->name('admin-home');
            Route::post('/store', 'HomeController@store')->name('admin-home-store');
        });

        Route::group(['prefix' => 'contact-us'], function(){
            Route::get('/', 'ContactUsController@index')->name('admin-contact-us');
            Route::post('/store', 'ContactUsController@store')->name('admin-contact-us-store');
        });

        Route::group(['prefix' => 'general-settings'], function(){
            Route::get('/', 'GeneralSettingsController@index')->name('admin-general-settings');
            Route::post('/store', 'GeneralSettingsController@store')->name('admin-general-settings-store');
        });
    });
});
