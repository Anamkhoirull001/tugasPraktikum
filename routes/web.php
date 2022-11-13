<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Tugas1Controller;

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

Route::get('/tugas1', [Tugas1Controller::class, 'index']);

Route::get('/nama3', function () {
    echo '<h1> ini adalah /nama3';
})->middleware('cmw');

Route::get('/Postt', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

Route::get('/read', [PostController::class, 'read']);
Route::get('/delete/{id}', function ($id) {
    $model = Post::find($id);
    $model->delete();
    return redirect('Postt')->with('status', 'Blog Post Form Data Has Been Deleted');
});
