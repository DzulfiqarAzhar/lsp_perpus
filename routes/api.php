<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('kategori', [App\Http\Controllers\API\KategoriController::class, 'get']);
Route::get('kategori/{id}', [App\Http\Controllers\API\KategoriController::class, 'get']);
Route::post('kategori', [App\Http\Controllers\API\KategoriController::class, 'store']);
Route::put('kategori/{id}', [App\Http\Controllers\API\KategoriController::class, 'update']);
Route::delete('kategori/{id}', [App\Http\Controllers\API\KategoriController::class, 'destroy']);

Route::get('user', [App\Http\Controllers\API\UserController::class, 'get']);
Route::get('user/{id}', [App\Http\Controllers\API\UserController::class, 'get']);
Route::post('user', [App\Http\Controllers\API\UserController::class, 'store']);
Route::put('user/{id}', [App\Http\Controllers\API\UserController::class, 'update']);
Route::delete('user/{id}', [App\Http\Controller\API\UserController::class, 'destroy']);

Route::get('buku', [App\Http\Controllers\API\BukuController::class, 'get']);
Route::get('buku/{id}', [App\Http\Controllers\API\BukuController::class, 'get']);
Route::post('buku', [App\Http\Controllers\API\BukuController::class, 'store']);
Route::put('buku/{id}', [App\Http\Controllers\API\BukuController::class, 'update']);
Route::delete('buku/{id}', [App\Http\Controllers\API\BukuController::class, 'destroy']);

Route::get('peminjaman', [App\Http\Controllers\API\PeminjamanController::class, 'get']);
Route::get('peminjaman/{id}', [App\Http\Controllers\API\PeminjamanController::class, 'get']);
Route::post('peminjaman/store', [App\Http\Controllers\API\PeminjamanController::class, 'store']);
Route::put('peminjaman/{id}', [App\Http\Controllers\API\PeminjamanController::class, 'update']);
Route::delete('peminjaman/{id}', [App\Http\Controllers\API\PeminjamanController::class, 'destroy']);

Route::get('penerbit', [App\Http\Controllers\API\PenerbitController::class, 'get']);
Route::get('penerbit/{id}', [App\Http\Controllers\API\PenerbitController::class, 'get']);
Route::post('penerbit', [App\Http\Controllers\API\PenerbitController::class, 'store']);
Route::put('penerbit/{id}', [App\Http\Controllers\API\PenerbitController::class, 'update']);
Route::delete('penerbit/{id}', [App\Http\Controllers\API\PenerbitController::class, 'destroy']);


