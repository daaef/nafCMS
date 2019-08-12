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

  Route::group(['prefix' => 'settings'], function() {
    Route::get('/', 'SettingController@index')->name('get_setting');
    Route::post('/', 'SettingController@store')->name('store.settings');
    Route::get('/create-settings', 'SettingController@create')->name('create.settings');
    

    Route::get('/find-setting/{id}', 'SettingController@show')->name('find.setting');
    Route::get('/edit-setting/{id}', 'SettingController@edit')->name('edit.setting');
    Route::put('/update-setting/{id}', 'SettingController@update')->name('update.setting');
    Route::get('/delete-setting/{id}', 'SettingController@delete')->name('delete.setting');
  });

  // Menu Roles Resources
  Route::group(['prefix' => 'roles'], function() {
    Route::get('/', 'RoleController@index')->name('role.index');
    Route::get('/create', 'RoleController@create')->name('role.create');
    Route::post('/create', 'RoleController@store')->name('role.store');

    // Route::get('/{slug}', 'RoleController@show')->name('role.show');
    Route::get('/{slug}/edit', 'RoleController@edit')->name('role.edit');
    Route::put('/{slug}/edit', 'RoleController@update')->name('role.update');
  });

  // Users Route Resources
  Route::group(['prefix' => 'users'], function() {
    Route::get('/', 'UserController@index')->name('user.index');
    Route::post('/', 'UserController@store')->name('user.store');
    Route::put('/{slug}', 'UserController@update')->name('user.update');
  });

  // Menu Route Resources
  Route::group(['prefix' => 'menu'], function() {
    Route::get('/', 'MenuController@index')->name('menu.index');
    Route::get('/create', 'MenuController@create')->name('menu.create');
    Route::post('/create', 'MenuController@store')->name('menu.store');

    // Route::get('/{slug}', 'MenuController@show')->name('menu.show');
    Route::get('/{slug}/edit', 'MenuController@edit')->name('menu.edit');
    Route::put('/{slug}/edit', 'MenuController@update')->name('menu.update');
    Route::get('/{slug}/delete', 'MenuController@delete')->name('menu.delete');
    Route::get('/trash', 'MenuController@trash')->name('menu.deleted');
    Route::get('/delete-from-trash/{slug}', 'MenuController@parmanentDelete')->name('menu.parmanent.delete');
  });

  // Page Type Resources
  Route::group(['prefix' => 'page-type'], function() {
    Route::get('/', 'PageTypeController@index')->name('pageType.index');
    Route::get('/create', 'PageTypeController@create')->name('pageType.create');
    Route::post('/create', 'PageTypeController@store')->name('pageType.store');

    Route::get('/{slug}/edit', 'PageTypeController@edit')->name('pageType.edit');
    Route::put('/{slug}/edit', 'PageTypeController@update')->name('pageType.update');
  });

  // Page Route Resources
  Route::group(['prefix' => 'pages'], function() {
    Route::get('/', 'PageController@index')->name('page.index');
    Route::get('/create', 'PageController@create')->name('page.create');
    Route::post('/create', 'PageController@store')->name('page.store');
  });

  // News Category
  Route::group(['prefix' => 'news-category'], function () {
    Route::get('/', 'NewsCategoryController@index')->name('newsCategory.index');
    Route::get('/create', 'NewsCategoryController@create')->name('newsCategory.create');
    Route::post('/create', 'NewsCategoryController@store')->name('newsCategory.store');
    Route::get('/{slug}/edit', 'NewsCategoryController@edit')->name('newsCategory.edit');
    Route::put('/{slug}/update', 'NewsCategoryController@update')->name('newsCategory.update');
    Route::get('/{slug}/delete', 'NewsCategoryController@delete')->name('newsCategory.delete');
  });

  Route::group(['prefix' => 'sliders'], function() {
    Route::get('/', 'SliderController@index')->name('slider.index');
    Route::get('/create', 'SliderController@create')->name('slider.create');
    Route::post('/create', 'SliderController@store')->name('slider.store');
    
    Route::get('/{slug}/edit', 'SliderController@edit')->name('slider.edit');
    Route::put('/{slug}/update', 'SliderController@update')->name('slider.update');
    Route::get('/{slug}/delete', 'SliderController@delete')->name('slider.delete');
  });
});
 


  



