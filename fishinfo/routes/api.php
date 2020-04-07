<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'PassportController@login');
Route::post('register', 'PassportController@register');
 
Route::middleware('auth:api')->group(function () {
    Route::get('user', 'PassportController@details');
 
    Route::post('fishponds/create', 'FishpondController@store');
    Route::put('fishponds/uploadpond/{id}','FishpondController@uploadpond');
    // Edit data by user
    Route::put('fishponds/edit/{id}','FishpondController@editUserData');
    Route::get('/fishponds/pondlist','FishpondController@pondList');
    Route::post('/fishponds/search','FishpondController@search');



    Route::get('schemes','SchemeController@listOfSchemes');


    Route::get('tehsils','TehsilController@listOfTehsils');
});
