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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index');
Route::get('/post/{slug}', 'IndexController@showPost')->name('post.view');
Route::get('/page/{slug}', 'IndexController@showPage')->name('page.view');

Auth::routes();

//Logged in users/seller cannot access or send requests these pages
Route::group(['middleware' => 'institution_guest'], function() {
	Route::get('institution_register', 'InstitutionAuth\RegisterController@showRegistrationForm');
	Route::post('institution_register', 'InstitutionAuth\RegisterController@register');

	Route::get('institution_login', 'InstitutionAuth\LoginController@showLoginForm');
	Route::post('institution_login', 'InstitutionAuth\LoginController@login');

});

Route::group(['prefix'=>'ajax'], function(){

	Route::get('/{id}/findMenuItem', 'MenuController@findMenuItem')->name('menu.findMenuItem');
});

//Only logged in sellers can access or send requests to these pages
Route::group(['prefix'=>'institution', 'middleware' => 'institution_auth'], function(){

	Route::post('institution_logout', 'InstitutionAuth\LoginController@logout')->name('institution.logout');
	Route::get('/dashboard', 'InstitutionController@dashboard')->name('institution.dashboard');
	Route::get('/', 'InstitutionController@dashboard')->name('institution.dashboard');
	Route::get('/home', 'InstitutionController@dashboard')->name('institution.dashboard');

	Route::resource('headquarter', 'HeadquarterController');
	Route::resource('employee', 'EmployeeController');
	Route::resource('role', 'RoleController');
	Route::resource('group', 'GroupController');
	Route::resource('file', 'FileController');
	
	Route::resource('post', 'PostController');
	Route::get('post/{id}/destroy', 'PostController@destroy')->name('post.destroy');

	Route::resource('page', 'PageController');
	Route::get('page/{id}/destroy', 'PageController@destroy')->name('page.destroy');

	Route::resource('category', 'CategoryController');
	Route::resource('setting', 'SettingController');
	Route::resource('menu', 'MenuController');
	Route::get('{id}/build', 'MenuController@build')->name('menu.build');
	Route::post('addItem', 'MenuController@addItem')->name('menu.addItem');
	Route::put('{id?}/updateItem', 'MenuController@updateItem')->name('menu.updateItem');
	Route::post('/menu/{id?}/orderMenu', 'MenuController@orderItem');
});

//Password reset routes
Route::get('institution_password/reset', 'InstitutionAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('institution_password/email', 'InstitutionAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('institution_password/reset/{token}', 'InstitutionAuth\ResetPasswordController@showResetForm');
Route::post('institution_password/reset', 'InstitutionAuth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
