<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\API\ProjectController;
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

//add route for the index method in the api controller
Route::get('projects', [ProjectController::class, 'index']);
//add route for the show method in the api controller
Route::get('projects/{slug}', [ProjectController::class, 'show']);
//comments
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
