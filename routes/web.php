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

Route::get('/','HomeController@index');
Route::get('/dash','HomeController@dash'); 
 Route::get('/login','loginController@index')->name('login');
  Route::get('/register','loginController@register');
 Route::post('/register','Auth\RegisterController@register');
 Route::post('/logout','Auth\LoginController@logout');
Route::get('/home', 'HomeController@dash')->name('home');
Route::post('/loggin','Auth\LoginController@login');
Route::post('/aadmin','Auth\AdminLoginController@login');
Route::get('/aadmin','Auth\AdminLoginController@loginForm')->name('adminform');
Route::get('/adminhome','AdminHomeController@index')->name('adminhome');
 Route::get('/adminlogout','Auth\AdminLoginController@logout');
 Route::post('/addItem','ItemController@store');
 Route::get('/showItem','ItemController@show');
 Route::delete('/deleteItem','ItemController@destroy');

 Route::post('/addCategory','CategoryController@store');
  Route::patch('/editCategory','CategoryController@edit');
  Route::delete('/deleteCategory','CategoryController@delete');
  Route::get('/item','ItemController@index');
