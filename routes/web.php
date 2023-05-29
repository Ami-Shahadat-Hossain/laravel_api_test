<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/register', [RegistrationController::class,'register']);

Route::get('/dashboard', function () {
    return view('welcome2');
});

Route::post('/home',
function (Request $request) {
    return response('dashboard', 302);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [DemoController::class, 'profile']);
    Route::get('/settings', [DemoController::class, 'settings']);
});


Route::resource('products',ProductController::class);

Route::post('/sendMail', ContactController::class);

Route::resource('/posts', PostController::class);

Route::get('/blade', function () {
    return view('welcome');
});





