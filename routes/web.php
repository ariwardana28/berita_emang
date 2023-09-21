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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['middleware' => ['auth']], function () {
//    Route::resource('users', App\Http\Controllers\UserController::class);
//    Route::resource('roles', App\Http\Controllers\RoleController::class);
//    Route::resource('kategoris', App\Http\Controllers\KategoriController::class);
//});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('kategoris', App\Http\Controllers\KategoriController::class);

    Route::resource('beritas', App\Http\Controllers\BeritaController::class);
    Route::resource('slides', App\Http\Controllers\SlideController::class);
    Route::resource('abouts', App\Http\Controllers\AboutController::class);
    Route::resource('media', App\Http\Controllers\MediaController::class);
    Route::resource('daerahs', App\Http\Controllers\DaerahController::class);
    Route::resource('beritaDaerahs', App\Http\Controllers\BeritaDaerahController::class);
});


//User
Route::get('kategori/{id}',[App\Http\Controllers\User\KategoriController::class,'index'])->name('kategori.index');
Route::get('kategori/{id}/show',[App\Http\Controllers\User\KategoriController::class,'show'])->name('kategori.show');

Route::get('daerah/{id}',[App\Http\Controllers\User\DaerahController::class,'index'])->name('daerah.index');
Route::get('daerah/{id}/show',[App\Http\Controllers\User\DaerahController::class,'show'])->name('daerah.show');

Route::get('us/{id}',[App\Http\Controllers\User\TentangController::class,'index'])->name('tentang.index');

Route::post('pencarian',[App\Http\Controllers\User\PencarianController::class,'index'])->name('pencarian');

Route::resource('iklans', App\Http\Controllers\IklanController::class);

Route::resource('komens', App\Http\Controllers\KomenController::class);
Route::resource('komenDaerahs', App\Http\Controllers\KomenDaerahController::class);
