<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OptedInProgramsController;
use App\Http\Controllers\SambazasController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RewardsController;
use App\Http\Controllers\RedemptionsController;
use App\Http\Controllers\TransactionsController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::post('store-public-key', [AuthController::class, 'storePublicKey']);

Route::middleware('auth:api')->group(function () {
    // Your other secured API routes here...

    // Add the new route here
    Route::get('/export-companies', [CompaniesController::class, 'index']);
    //need testing again
    Route::get('/company/{id}', [CompaniesController::class, 'show']);
    Route::get('/company/programs/{id}`', [CompaniesController::class, 'companyPrograms']);
    
    //categories
    Route::get('/export-categories', [CategoriesController::class, 'index']);
    
    //sambaza
    Route::post('/sambaza', [SambazasController::class, 'sambaza']);
    Route::get('/search-contact/{phoneNumber}', [SambazasController::class, 'searchByPhoneNumber']);

 
    //Redeem
    Route::post('/redeem', [RedemptionsController::class, 'redemption']);
    //rewards
    Route::get('/program/rewards',[RewardsController::class, 'getProgramRewards']);
    //OPTIN in a program
    Route::post('/optIn', [OptedInProgramsController::class, 'programOptin']);
    //A User OPTEDIN Programs
    Route::get('/customer-opted-in-programs', [CustomersController::class, 'getCustomerOptedInPrograms']);
    //A user transactions
    Route::get('/customer-transactions', [TransactionsController::class, 'getUserTransactions']);

    // Route::get('/user-opted-in-programs/{userId}', [UserController::class, 'getUserOptedInPrograms']);
    //user actions
    Route::post('/update-profile', [CustomersController::class, 'updateProfile']);
    Route::post('/update-avatar', [CustomersController::class, 'changeAvatar']);
    Route::post('/change-password', [CustomersController::class, 'changePassword']);
   // Route::get('/logout',  [UserController::class, 'logout']);

    //ads
    Route::get('/ads', [AdsController::class, 'index']);

    Route::get('/unread-notifications', [NotificationController::class, 'getUnreadCount']);
    Route::get('/user-notifications',[NotificationController::class, 'index']);
});
