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


// Authentication Route Group
Route::group(['prefix' => 'auth'], function() {

  // Account Registration Route Resources
  Route::get('/register', 'RegisterController@register')->name('get_register');
  Route::post('/register', 'RegisterController@store')->name('post_register');

  // Account Acitivation Route Resources
  Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate')->name('account_activation');

  // Recover Password Route Resources
  Route::get('/password-recovery', 'ForgotPasswordController@forgotPassword')->name('get_recovery');
  Route::post('/password-recovery', 'ForgotPasswordController@postForgotPassword')->name('password_recovery');
  // Reset Password Route Resources
  Route::get('/reset/{email}/{resetCode}', "ForgotPasswordController@resetPassword")->name('reset_password');
  Route::post('/reset/{email}/{resetCode}', "ForgotPasswordController@postResetPassword")->name('post_reset_password');

  // Login Route Resources
  Route::get('/login', 'LoginController@getLogin')->name('auth.login.get');
  Route::post('/login', 'LoginController@post')->name('auth.login.post');

  // Logout Route Resources
  Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'admin'], function() {
  Route::get('/dashboard', 'AdminController@index')->name('admin.index');


  Route::group(['prefix' => 'roles'], function() {
    Route::get('/', 'RoleController@index')->name('role.index');
    Route::get('/create', 'RoleController@create')->name('role.create');
    Route::post('/create', 'RoleController@store')->name('role.store');

    Route::get('/{slug}', 'RoleController@show')->name('role.show');
    Route::get('/{slug}/edit', 'RoleController@edit')->name('role.edit');
    Route::put('/{slug}/edit', 'RoleController@update')->name('role.update');
  });
});