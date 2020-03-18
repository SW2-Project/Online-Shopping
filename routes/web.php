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
    return view('Login.Login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Admin', function(){
    return view('Admin.Admin');
});

Route::get('/Add_product', function(){
    return view('Add_product.Add_product');
});

Route::post('AddProduct', 'AddProduct@upload');

<<<<<<< HEAD
Route::get('/delete_product', function(){
    return view('delete_product.delete_product');
})->name('delete_product');

Route::get('deleteProduct', 'deleteProduct@delete')->name('deleteproduct');
=======
Route::get('/Register', function(){
    return view('Register.Register');
});
>>>>>>> 45d7817be48cb7853586e1055b6ed99b7f3e757e
