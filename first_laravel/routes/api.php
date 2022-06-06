<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\pallindrom;
use Illuminate\Http\Controllers\seconds;
use Illuminate\Http\Controllers\output_texts;
use Illuminate\Http\Controllers\beer;





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
Route::get('/pallindrom',[pallindrom::class,"num_of_pallindroms"]);
Route::get('/time',[seconds::class, "time_seconds"]);
Route::get('/text-attachments',[output_texts::class, "text"]);
Route::get('/text-attachments',[beer::class, "get_random_beer"]);



