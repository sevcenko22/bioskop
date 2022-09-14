<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProjectionController;
use App\Http\Controllers\SpectatorController;
use App\Http\Controllers\TicketController;

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

Route::apiResources([
    '/room' => RoomController::class,
    '/movie' => MovieController::class,
    '/spectator' => SpectatorController::class
]);

//Projekcije
Route::post('/projection', [ProjectionController::class, 'createProjection']);
Route::get('/projection', [ProjectionController::class, 'getProjections']);

//Tickets
Route::get('/ticket', [TicketsController::class, 'createProjection']);
Route::post('/ticket', [TicketsController::class, 'store']);
Route::post('/mostWatched', [TicketController::class, 'mostWatched']);

