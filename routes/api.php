<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('posts', [PostController::class, 'index']);
Route::group(['prefix' => 'post'], function () {
	Route::post('add', [PostController::class, 'add']);
	Route::get('edit/{id}', [PostController::class, 'edit']);
	Route::post('update/{id}', [PostController::class, 'update']);
	Route::delete('delete/{id}', [PostController::class, 'delete']);
});

