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

Route::get('/', 'HomeController@index');
//Route::prefix('admin')->group(function (){
//
//    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//    Route::post('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login.submit');
//    Route::get('/', 'AdminController@index')-> name('admin.dashboard');
//});
Auth::routes();
//Route::get('/cours', function () {
//    return view('cours');
//});
Route::get('/logout','DHomeController@index');
Route::get('/cours','HomeController@cours');
Route::get('/form',function(){
    return view('form');
});


Route::get('/forms', function() {
    echo Form::open(array('url' => 'test'));
    echo Form::close();
});
//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/save', 'HomeController@save');
Route::get('/lecture', 'HomeController@lecture');

Route::resource('/users','UserController');
Route::resource('/notifications','NotificationController');
Route::get('nots',function (){
    return view('notification');
});
Route::get('/cours/navigation', 'NavigationController@lectureNavigation');


