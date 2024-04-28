<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TokenVerificationMiddleware;
use App\Http\Controllers\api\v1\admin\AdminUserController;

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


Route::get('/hi', function () {
    return 'Hi';
});

Route::prefix('admin')->group(function() {

    Route::post('/register',[AdminUserController::class,'UserRegistration']);
    
    Route::post('/login',[AdminUserController::class,'UserLogin']);

    
    // profile
    Route::get('/user-profile',[AdminUserController::class,'UserProfile'])->middleware([TokenVerificationMiddleware::class]);
    Route::post('/user-update',[AdminUserController::class,'UpdateProfile'])->middleware([TokenVerificationMiddleware::class]);

    // password reset
    Route::post('/send-otp',[AdminUserController::class,'SendOTPCode']);
    Route::post('/verify-otp',[AdminUserController::class,'VerifyOTP']);
    Route::post('/reset-password',[AdminUserController::class,'ResetPassword'])->middleware([TokenVerificationMiddleware::class]);
    
 
   
});


