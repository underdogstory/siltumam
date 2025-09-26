<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\CategoryController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public API routes
Route::prefix('v1')->group(function () {
    // Categories
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{category}', [CategoryController::class, 'show']);
    
    // Companies
    Route::get('/companies', [CompanyController::class, 'index']);
    Route::get('/companies/{company}', [CompanyController::class, 'show']);
    
    // Advertisements
    Route::get('/advertisements', [AdvertisementController::class, 'index']);
    Route::get('/advertisements/{advertisement}', [AdvertisementController::class, 'show']);
    Route::get('/companies/{company}/advertisements', [AdvertisementController::class, 'byCompany']);
    Route::get('/categories/{category}/advertisements', [AdvertisementController::class, 'byCategory']);
});

// Protected API routes (require authentication)
Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    // Company management
    Route::post('/companies', [CompanyController::class, 'store']);
    Route::put('/companies/{company}', [CompanyController::class, 'update']);
    Route::delete('/companies/{company}', [CompanyController::class, 'destroy']);
    
    // Advertisement management
    Route::post('/advertisements', [AdvertisementController::class, 'store']);
    Route::put('/advertisements/{advertisement}', [AdvertisementController::class, 'update']);
    Route::delete('/advertisements/{advertisement}', [AdvertisementController::class, 'destroy']);
    
    // Category management (admin only)
    Route::middleware('role:platform_admin')->group(function () {
        Route::post('/categories', [CategoryController::class, 'store']);
        Route::put('/categories/{category}', [CategoryController::class, 'update']);
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy']);
    });
});
