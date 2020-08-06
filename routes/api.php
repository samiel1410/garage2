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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('users', 'API\UserController');
Route::apiResource('sites', 'API\SiteController');
Route::apiResource('cars', 'API\CarController');
Route::apiResource('bares', 'API\BareController');
Route::apiResource('campus', 'API\CampuController');
Route::apiResource('campuses', 'API\CampusController');
Route::apiResource('bars', 'API\BarController');
Route::apiResource('snacks', 'API\SnackController');
Route::apiResource('menus', 'API\MenuController');
Route::apiResource('buzons', 'API\BuzonController');
Route::apiResource('preferencias', 'API\PreferenciaController');