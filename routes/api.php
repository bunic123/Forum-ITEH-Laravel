<?php

use App\Http\Controllers\AutfKontroler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumKontroler;
use App\Http\Controllers\ClanKontroler;


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

Route::post('register', [AutfKontroler::class, 'register']);
Route::post('login', [AutfKontroler::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('forum', ForumKontroler::class)->only('index', 'show', 'destroy', 'update');
    Route::resource('clan', ClanKontroler::class)->only('index', 'show');
    Route::post('logout', [AutfKontroler::class, 'logout']);
});
