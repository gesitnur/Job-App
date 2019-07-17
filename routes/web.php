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

Route::resource('user', 'user_controller');
Route::resource('job', 'job_controller');
Route::resource('adminn', 'admin_controller');

Route::get('master', 'admin_controller@master')->name('master');
Route::get('list_job', 'admin_controller@list_job')->name('list_job');
Route::resource('lamaran', 'LamaranController');
Route::post('apply_job/{id}', 'LamaranController@apply_job')->name('apply_job');
Route::get('apply/{id}', 'LamaranController@apply')->name('apply');
Route::get('reject/{id}', 'LamaranController@reject')->name('reject');
Route::get('show/{id_user}', 'admin_controller@show')->name('show');
Route::get('admin', 'admin_controller@index')->name('admin-home');
Route::get('list_user', 'admin_controller@indexx')->name('list_user');
Route::get('lengkapi/{id}', 'user_controller@lengkapi')->name('lengkapi');
Route::get('lamaran_user', 'user_controller@lamaran_user')->name('lamaran_user');
Route::get('edit_profil', 'user_controller@edit_profil')->name('edit_profil');
Route::put('update_profil/{id}', 'user_controller@update_profil')->name('update_profil');
Route::get('profil_user', 'user_controller@profil_user')->name('profil_user');
Route::get('regis_berhasil', 'user_controller@regis_berhasil')->name('regis_berhasil');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Route::group(['middleware' => ['auth', 'role:admin,user']], function () {
//     Route::get('/home', 'HomeController@index')->name('home');
//      Route::resource('user', 'user_controller');
// });
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('admin', 'admin_controller@index')->name('admin-home');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('user', 'job_controller@index')->name('user-home');
});