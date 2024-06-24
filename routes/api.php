<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\RegisterController;
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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
route::get('test', [ApiController::class, 'test']);
Route::middleware('auth:sanctum')->group(function () {
   // Route::resource('products', ProductController::class);

   route::post('hit-data', [ApiController::class, 'hitData']);
});


// route::get('store', [ApiController::class, 'test']);
