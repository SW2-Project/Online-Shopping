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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Admin', function(){
    return view('Admin.Admin');
})->name('Admin');

Route::get('/Add_product', function(){
    return view('Add_product.Add_product');
})->name('Add_product');

Route::post('AddProduct', 'AddProduct@upload');
Route::post('Log_in', 'Log_in@sign_in');
Route::post('Registerr', 'Registerr@upload');
Route::post('deleteproduct', 'deleteproduct@delete');
Route::get('logout', 'logout@out');


Route::get('/Register', function(){
    return view('Register.Register');
})->name('Register');
Route::get('/Login', function(){
    return view('Login.Login');
})->name('Login');

Route::get('/delete_product', function(){
    return view('delete_product.delete_product');
})->name('delete_product');
Route::get('/profile', function(){
    return view('profile.profile');
})->name('profile');
Route::get('/edit_profile', function(){
    return view('edit_profile.edit_profile');
})->name('edit_profile');


