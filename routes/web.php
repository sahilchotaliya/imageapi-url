<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use Illuminate\Http\Request;

// Route definition



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

Route::get('/upload', 'App\Http\Controllers\ImageController@showUploadForm');
Route::post('/upload', 'App\Http\Controllers\ImageController@uploadImage')->name('upload.image');


Route::get('/', function () {
    return view('welcome');
});
