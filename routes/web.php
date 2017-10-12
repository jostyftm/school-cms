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

//Logged in users/seller cannot access or send requests these pages
Route::group(['middleware' => 'institution_guest'], function() {
	Route::get('institution_register', 'InstitutionAuth\RegisterController@showRegistrationForm');
	Route::post('institution_register', 'InstitutionAuth\RegisterController@register');

	Route::get('institution_login', 'InstitutionAuth\LoginController@showLoginForm');
	Route::post('institution_login', 'InstitutionAuth\LoginController@login');

});

//Only logged in sellers can access or send requests to these pages
Route::group(['prefix'=>'institution', 'middleware' => 'institution_auth'], function(){

	Route::post('institution_logout', 'InstitutionAuth\LoginController@logout');
	Route::get('/dashboard', 'InstitutionController@dashboard')->name('institution.dashboard');
	Route::get('/home', 'InstitutionController@dashboard')->name('institution.dashboard');

	Route::resource('headquarter', 'HeadquarterController');
});

//Password reset routes
Route::get('institution_password/reset', 'InstitutionAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('institution_password/email', 'InstitutionAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('institution_password/reset/{token}', 'InstitutionAuth\ResetPasswordController@showResetForm');
Route::post('institution_password/reset', 'InstitutionAuth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
