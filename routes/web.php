<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('app');
// });
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('home', 'Frontend\HomeController@index')->name('home');
    Route::get('shop', 'Frontend\ShopController@index')->name('shop');
    Route::get('kategori', 'Frontend\KategoriController@index')->name('kategori');
    Route::get('kontak', 'Frontend\KontakController@index')->name('kontak');
    Route::get('detail', 'Frontend\DetailController@index')->name('detail');
    Route::get('check', 'Frontend\CheckController@index')->name('check');

    //Login
    Route::post('registrasi', 'Frontend\LoginController@register')->name('register');
    Route::post('login', 'Frontend\LoginController@login')->name('login');
    Route::get('logout', 'Frontend\LoginController@logout')->name('logout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
