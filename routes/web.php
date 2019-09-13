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

use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
    return view('admin.dashboard');
});
Route::namespace('Auth')->group(function () {
    Route::get('admin','AuthController@adminLoginForm')->name('admin.login.form');
    Route::post('admin','AuthController@adminLogin');
    Route::get('admin-logout','AuthController@adminLogout')->name('admin.logout');
    ;
    Route::get('user','AuthController@userLoginForm')->name('user.login.form');
    Route::post('user','AuthController@userLogin');
    Route::get('user-logout','AuthController@userLogout')->name('user.logout');

});



Route::namespace('Admin')->group(function () {
    Route::get('admin-create','AdminController@adminCreateForm')->name('admin.create.form');
    Route::post('admin-create','AdminController@adminCreate');

    Route::get('admin-read','AdminController@adminRead')->name('admin.read');
});

Route::namespace('User')->group(function(){
    Route::get('/','UserController@home')->name('home');
    Route::get('user-registration','UserController@userRegistrationForm')->name('user.registration.form');

    Route::post('user-registration','UserController@userRegistration');
});

Route::namespace('Service')->group(function (){
    Route::get('service-create','ServiceController@serviceCreateForm')->name('service.create.form');
    Route::post('service-create','ServiceController@serviceCreate');


});
Route::namespace('Portfolio')->group(function(){
    Route::get('portfolio-create','PortfolioController@portfolioCreateForm')->name('portfolio.create.form');
    Route::post('portfolio-create','PortfolioController@portfolioreate');

});

Route::namespace('Gallery')->group(function (){
    Route::get('gallery-create','GalleryController@galleryCreateForm')->name('gallery.create.form');
    Route::post('gallery-create','GalleryController@galleryCreate');
});
