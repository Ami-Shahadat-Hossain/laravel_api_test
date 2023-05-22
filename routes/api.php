<?php

use App\Http\Controllers\DemoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/file/{name}',[DemoController::class,'Form']);
Route::post('/header',[DemoController::class,'Header']);
Route::get('/endpoint/{page}',[DemoController::class,'Input']);
Route::get('/json',[DemoController::class,'Json']);
Route::post('/uploadFile',[DemoController::class,'UploadFile']);
Route::get('/token',[DemoController::class,'Token']);
Route::post('/submit', function(Request $request) {
    $email = $request->input('email');
    $responseData = [
        'success' => true,
        'message' => 'Form submitted successfully.'
    ];
    return response()->json($responseData);
});

