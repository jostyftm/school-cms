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

// 
Route::group(['prefix'=>'contract'], function(){

	Route::get('/', 'ContractController@showContracts');
	Route::get('/{slug}', 'ContractController@showContract')->name('show.contract');
});

Route::group(['prefix'=>'headquarter'], function(){

	Route::get('/', 'HeadquarterController@all');
	Route::get('/{id}', 'HeadquarterController@show')->name('show.headquarter');
});

Auth::routes();

// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//      \UniSharp\LaravelFilemanager\Lfm::routes();
// });

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
	Route::put('{id}/updateAccount', 'SettingController@updateAccount')->name('setting.updateAccount');
	Route::put('{id}/updatePassword', 'SettingController@updatePassword')->name('setting.updatePassword');

	Route::resource('menu', 'MenuController');
	Route::get('{id}/build', 'MenuController@build')->name('menu.build');
	Route::post('addItem', 'MenuController@addItem')->name('menu.addItem');
	Route::delete('{id?}/destroyItem', 'MenuController@destroyItem')->name('menu.destroyItem');
	Route::put('{id?}/updateItem', 'MenuController@updateItem')->name('menu.updateItem');
	Route::post('/menu/{id?}/orderMenu', 'MenuController@orderItem');

	Route::resource('contract', 'ContractController');
	Route::get('contract/{id}/destroy', 'ContractController@destroy')->name('contract.destroy');

	Route::resource('banner', 'BannerController');
	Route::get('banner/{id}/destroy', 'BannerController@destroy')->name('banner.destroy');
});

//Password reset routes
Route::get('institution_password/reset', 'InstitutionAuth\ForgotPasswordController@showLinkRequestForm');
Route::post('institution_password/email', 'InstitutionAuth\ForgotPasswordController@sendResetLinkEmail');
Route::get('institution_password/reset/{token}', 'InstitutionAuth\ResetPasswordController@showResetForm');
Route::post('institution_password/reset', 'InstitutionAuth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
