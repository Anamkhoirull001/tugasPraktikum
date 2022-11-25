<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Tugas1Controller;
use App\Models\Mahasiswa;

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



Route::get('/tugas1', [Tugas1Controller::class, 'index']);

Route::get('/nama3', function () {
    echo '<h1> ini adalah /nama3';
})->middleware('cmw');

Route::get('/', function () {
    return view('welcome');
});

// CRUD 1
Route::get('/input', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);
Route::get('/read', [PostController::class, 'read']);
Route::get('/delete/{id}', [PostController::class, 'delete']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('update/{id}', [PostController::class, 'update']);

// CRUD 2
Route::get('MahasiswaInput', [MahasiswaController::class, 'index']);
Route::post('store-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/Mahasiswa', [MahasiswaController::class, 'show']);
Route::get('/read-data/{nim}', [MahasiswaController::class, 'read']);
Route::get('/edit-data/{nim}',  [MahasiswaController::class, 'edit']);
Route::post('/update-data/{nim}',  [MahasiswaController::class, 'update']);
Route::get('/delete-data/{nim}', [MahasiswaController::class, 'delete']);
