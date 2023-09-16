<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LegoSetController;
use App\Http\Controllers\LegoSubThemeController;
use App\Http\Controllers\LegoThemeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function() {
    // Adds a new Lego set
    Route::post('/sets', [LegoSetController::class, 'addSet']); 

    // Deletes a Lego set by set number
    Route::delete('/sets/{setNumber}', [LegoSetController::class, 'deleteSet']); 

    // Updates a Lego set by set number
    Route::put('/sets/{setNumber}', [LegoSetController::class, 'editSet']); 
});

// Retrieves all Lego sets
Route::get('/sets', [LegoSetController::class, 'getSets']); 

// Retrieves a single Lego set by set number
Route::get('/sets/{setNumber}', [LegoSetController::class, 'getSet']); 




// Retrieves all Lego themes
Route::get('/themes', [LegoThemeController::class, 'getThemes']); 

// Retrieves subthemes of a single lego theme by themecode
Route::get('/themes/{themeCode}', [LegoSubThemeController::class, 'getSubThemesByParentTheme']);

// Retrieves all Lego sets by theme code 
Route::get('/themes/{themeCode}/sets', [LegoSetController::class, 'getSetsByTheme']); 


// Register a user
Route::post('/users/register', [AuthController::class, "register"]);


// Login a user
Route::post('/users/login', [AuthController::class, "login"]);