<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('hello/{name}', function ($name) {
//     return 'Hello  '.$name;
// });

// Route::get('hello-post/{name}', 'HelloWorldController@hello');

Route::get('bands', 'BandController@getAll');
Route::get('bands/{id}', 'BandController@getById');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
