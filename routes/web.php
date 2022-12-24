<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Tugas1Controller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/nama3', function () {
    echo '<h1> ini adalah /nama3';
})->middleware('cmw');


Route::get('/', function () {
    return view('welcome', ['title' => 'CRUD | Home']);
});

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);


Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);
Route::get('acount/1', [RegisterController::class, 'show'])->middleware('auth');


// CRUD 1
Route::get('/input', [PostController::class, 'index'])->middleware('auth');
Route::post('store-form', [PostController::class, 'store']);
Route::get('/read', [PostController::class, 'read'])->middleware('auth');
Route::get('/delete/{id}', [PostController::class, 'delete'])->middleware('auth');
Route::get('/edit/{id}', [PostController::class, 'edit'])->middleware('auth');
Route::post('update/{id}', [PostController::class, 'update']);

// CRUD 2
Route::get('MahasiswaInput', [MahasiswaController::class, 'index'])->middleware('auth');
Route::post('store-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/Mahasiswa', [MahasiswaController::class, 'show'])->middleware('auth');
Route::get('/read-data/{nim}', [MahasiswaController::class, 'read'])->middleware('auth');
Route::get('/edit-data/{nim}',  [MahasiswaController::class, 'edit'])->middleware('auth');
Route::post('/update-data/{nim}',  [MahasiswaController::class, 'update']);
Route::get('/delete-data/{nim}', [MahasiswaController::class, 'delete'])->middleware('auth');
