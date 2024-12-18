<?php

use App\Http\Controllers\API\AlertController;
use App\Http\Controllers\API\authController;
use App\Http\Controllers\API\DecesController;
use App\Http\Controllers\API\NaissanceController;
use App\Http\Controllers\API\RetrouveController;
use App\Http\Controllers\API\UserController as APIUserController;

use App\Http\Controllers\Users\UserController;
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
// Route::get('/users',[APIUserController::class,'index']);
Route::apiResource("/users",APIUserController::class);
Route::get("/usersServices/{service}",[APIUserController::class, "usersService"]);
Route::apiResource("/alert",AlertController::class);
Route::get("/serviceAlerts/{id}",[AlertController::class,"serviceAlerts"]);
Route::apiResource("/naissance",NaissanceController::class);
Route::apiResource("/deces",DecesController::class);
Route::get("/take/{deces}",[DecesController::class, "take"]);
Route::apiResource("/retrouve",RetrouveController::class);
Route::post('/auth', [authController::class, "doLogin"]);
Route::post("/update_agent_position", [APIUserController::class, "update_agent_position"]);
Route::post("/get_alerts", [APIUserController::class, "get_alerts"]);
Route::post("/get_my_alerts", [APIUserController::class, "get_my_alerts"]);
Route::get("/myNaissance/{id}",[NaissanceController::class,"myNaisance"]);
Route::post("/deces_update/{deces}",[DecesController::class, "deces_update"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
