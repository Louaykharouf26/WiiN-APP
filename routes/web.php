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
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Auth\FacebookSocialiteController;
 
 use App\Http\Controllers\UsersController;
 use App\Http\Controllers\ProfileController;
Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('/', function () {
    return view('SignIn');
});
Route::get('/contactus', function () {
    return view('contactUS');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'Language'], function () {
	Route::get('/home',"\App\Http\Controllers\HomeController@index");
	Route::get('/change-language/{lang}',"\App\Http\Controllers\HomeController@changeLang");
    Route::get('/SignIn', "\App\Http\Controllers\RTLController@signin");
    Route::get('/SignUp', "\App\Http\Controllers\RTLController@signup");
    Route::get('/forget', "\App\Http\Controllers\RTLController@forgetpass");
});
Route::group(['middleware' => 'auth'], function () {
	Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/searcher', "\App\Http\Controllers\SearcherController@index")->name('userlist');
    Route::get('/provider', "\App\Http\Controllers\ProviderController@index")->name('userlist');
    Route::get('/works', function () {
        return view('works');
    });
    Route::get('/workdetails', function () {
        return view('workdetails');
    });
    
});


Route::post('/description/update', [UsersController::class, 'updateDescription'])->name('description.update');


  Route::put('/profile', '\App\Http\Controllers\ProfileController@update')->name('profile.update');
  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
