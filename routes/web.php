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


// 0 - Authentification
/*Route::get('/', 'Admin\DefaultController@index');
Route::post('login', 'Admin\DefaultController@login');
Route::get('login/{register_code}', 'Admin\DefaultController@index');
Route::get('reset/{reset_code}', 'Admin\DefaultController@reset');
Route::post('forgetlogin', 'Admin\DefaultController@forgetlogin');
Route::post('setpassword', 'Admin\DefaultController@setpassword');*/

Route::get('/', 'DefaultController@index');
Route::get('login', 'DefaultController@login');
Route::post('postlogin', 'DefaultController@postlogin');
Route::get('logout', 'DefaultController@logout');
Route::get('setuppassword/{user_code}','DefaultController@setuppassword');
Route::post('setpassword','DefaultController@setpassword');

/* home page */
Route::get('home','HomeController@index');

/* profile of user studio */
Route::get('profile','UserController@profile');
Route::post('profile/update','UserController@updateprofile');
Route::post('profile/delete','UserController@deleteprofile');
Route::post('updatepassword','UserController@updatepassword');

/* settings page */
Route::get('settings', 'StudioController@showstudio');
Route::post('settings/update','StudioController@updatestudio');


/* users page */
Route::get('users','UserController@users');
Route::post('user/save','UserController@saveuser');
Route::post('user/update','UserController@updateuser');
Route::post('user/delete','UserController@deleteuser');
Route::any('user/show','UserController@showuser');

/* roles page */
Route::get('roles','RoleController@roles');
Route::post('role/save','RoleController@saverole');
Route::post('role/update','RoleController@updaterole');
Route::post('role/delete','RoleController@deleterole');
Route::any('role/show','RoleController@showrole');

/* studios page */
Route::post('studio/save', 'StudioController@savestudio');

/* billing page */
Route::get('billing', function () {
    return view('studio\billing\billing');
});
