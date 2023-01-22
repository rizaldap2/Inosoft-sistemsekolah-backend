<?php


use App\Models\Classroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Call Controller API
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScoreController;


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
// soal 1
Route::get('classrooms', [ClassroomController::class, 'index']);
// soal 2
Route::get('classrooms/{id}', [ClassroomController::class, 'show']);
// soal 3
Route::post('classrooms/store', [ClassroomController::class, 'store']);
// soal 4
Route::post('classrooms/{id}', [ClassroomController::class, 'update']);

// Student
// soal 5
Route::get('students', [StudentController::class, 'index']);
// soal 6
Route::get('students/{id}', [StudentController::class, 'show']);

//nilai
//soal 7
Route::get('scores/{id}', [ScoreController::class, 'show']);

//soal 8
Route::post('scores/store', [ScoreController::class, 'store']);

//jika error
Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found.'], 404);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
