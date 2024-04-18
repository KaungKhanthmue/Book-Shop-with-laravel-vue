<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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
Route::post('login',[AuthController::class,'login']);
Route::post('register',[AuthController::class,'register']);
    Route::get('books/index',[BookController::class,'index']);
// Route::group(['middleware' => ['auth:sanctum']], function () {

// });
Route::middleware('auth:sanctum')->group(function(){
    Route::post('profile/edit',[AuthController::class,'edit']);
    Route::get('book-index',[BookController::class,'index']);
    Route::get('yourbooksapi',[BookController::class,'yourBooks']);
    Route::post('book/store',[BookController::class,'store']);
    Route::post('like-unlike/{book}',[BookController::class,'liked']);
    Route::get('likecount/{book}',[BookController::class,'likeCount']);
    Route::get('follow/unfollow/{user}',[UserController::class,'follow_unfollow']);
    Route::get('followList',[UserController::class,'authFollowList']);
    Route::get('followListUser',[UserController::class,'userFollowList']);
    Route::get('add-friend/{user}',[UserController::class,'addAndRemoveFriend']);
    Route::get('freind/requestlist/{user}',[UserController::class,'freindRequestList']);
});
Route::get('friendall',[UserController::class,'friendAll']);

