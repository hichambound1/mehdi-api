<?php

use App\Http\Controllers\v1\AgenteController;
use App\Http\Controllers\v1\AuthController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\OrderController;
use App\Http\Controllers\v1\SousCategoryController;
use App\Http\Controllers\v1\WorkhourController;
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

        // public categories routes
        Route::get('/categories', [CategoryController::class, 'index']);
        Route::get('/categories/{id}', [CategoryController::class, 'show']);


        // public souscategories routes
        Route::get('/souscategories', [SousCategoryController::class, 'index']);
        Route::get('/souscategories/{id}', [SousCategoryController::class, 'show']);


        // public work hours routes
        Route::get('/workhours', [WorkhourController::class, 'index']);
        Route::get('/workhours/{id}', [WorkhourController::class, 'show']);


        // public agentes routes
        Route::get('/agentes', [AgenteController::class, 'index']);
        Route::get('/agentes/{id}', [AgenteController::class, 'show']);

        // public orders routes
        Route::post('/orders', [OrderController::class, 'store']);
        Route::get('/orders', [OrderController::class, 'index']);
        Route::get('/orders/{id}', [OrderController::class, 'show']);


        // public auth routes
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/login', [AuthController::class, 'login']);

// private routes
Route::group(['middleware' => ['auth:sanctum']], function () {

// private agentes routes
    Route::delete('/agentes/{id}', [AgenteController::class, 'destroy']);
    Route::post('/agentes', [AgenteController::class, 'store']);
    Route::put('/agentes/{id}', [AgenteController::class, 'update']);

// private orders routes
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);
    // Route::put('/orders/{id}', [OrderController::class, 'update']);

// private work hour routes

    Route::post('/workhours', [WorkhourController::class, 'store']);
    Route::put('/workhours/{id}', [WorkhourController::class, 'update']);
    Route::delete('/workhours/{id}', [WorkhourController::class, 'destroy']);
// private sous categories routes
    Route::post('/souscategories', [SousCategoryController::class, 'store']);
    Route::put('/souscategories/{id}', [SousCategoryController::class, 'update']);
    Route::delete('/souscategories/{id}', [SousCategoryController::class, 'destroy']);
// private  categories routes
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);


    Route::post('/logout', [AuthController::class, 'logout']);

});






Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
