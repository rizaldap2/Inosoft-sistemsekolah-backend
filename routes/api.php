<?php


use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Call Controller API
use App\Http\Controllers\ClassroomController;


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

// Classroom
Route::get('classrooms', [ClassroomController::class, 'index']);
Route::post('classrooms', [ClassroomController::class, 'store']);
Route::get('classrooms/{id}', [ClassroomController::class, 'show']);
Route::post('classrooms/{id}', [ClassroomController::class, 'update']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
