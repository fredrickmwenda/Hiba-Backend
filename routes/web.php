<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

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

Route::get('/', function () {
    if (Auth::check()) {
        // dd('mmh');
        // return redirect()->route('dashboard');
        $user = Auth::user();
        if ($user->hasRole('Employee') || $user->hasRole('companyAdmin')) {
            return redirect()->route('company.dashboard');
        } else {
            return redirect()->route('dashboard');
        }
    } 
    else {
        return redirect()->route('landing');
    }
});

Auth::routes();
// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

// Twitter login
Route::get('login/twitter', [App\Http\Controllers\Auth\LoginController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleTwitterCallback']);

Route::get('/landing', [App\Http\Controllers\HomeController::class, 'front'])->name('landing');
Route::get('/companydetails', [App\Http\Controllers\HomeController::class, 'companyReg'])->name('companyFront');
Route::get('/company-program/{id}', [App\Http\Controllers\HomeController::class, 'companyProgramLink'])->name('companyProgramLink');
Route::get('/company-program/submit-data', [App\Http\Controllers\HomeController::class, 'submitDetails'])->name('companyProgram.submit');

Route::get('/test-redis', function () {
    // Create a Redis instance
    $redis = Redis::connection();

    // Use the instance to set a key-value pair
    $redis->set('test_key', 'Hello, Redis!');

    // Use the instance to get the value
    return $redis->get('test_key');
});
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', [App\Http\Controllers\Dashboard::class, 'index'])->name('dashboard');
    Route::get('/company/dashboard', [App\Http\Controllers\CompanyDashboard::class, 'index'])->name('company.dashboard');
    Route::resource('user', 'App\Http\Controllers\UserController');
    Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
    Route::resource('permission', 'App\Http\Controllers\PermissionController');
    Route::get('permission/delete/{id}', [App\Http\Controllers\PermissionController::class, 'delete'])->name('permission.delete');
    Route::resource('role', 'App\Http\Controllers\RoleController');

    Route::get('/category/index', [App\Http\Controllers\CategoriesController::class, 'index'])->name('category.index');
    Route::get('/category/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('category.create');
    Route::get('/category/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('category.edit');
    Route::get('/category/show/{id}', [App\Http\Controllers\CategoriesController::class, 'show'])->name('category.show');
    Route::post('/category/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('category.store');
    Route::get('/category/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('category.delete');
    Route::get('/get-categories/{companyId}', [App\Http\Controllers\CategoriesController::class, 'getCategoriesByCompany'])->name('getCategories');


    Route::get('/company/index', [App\Http\Controllers\CompaniesController::class, 'index'])->name('company.index');
    Route::get('/company/create', [App\Http\Controllers\CompaniesController::class, 'create'])->name('company.create');
    Route::get('/company/edit/{id}', [App\Http\Controllers\CompaniesController::class, 'edit'])->name('company.edit');
    Route::get('/company/show/{id}', [App\Http\Controllers\CompaniesController::class, 'show'])->name('company.show');
    Route::post('/company/store', [App\Http\Controllers\CompaniesController::class, 'store'])->name('company.store');
    Route::get('/company/update/{id}', [App\Http\Controllers\CompaniesController::class, 'update'])->name('company.update');
    Route::get('/company/delete/{id}', [App\Http\Controllers\CompaniesController::class, 'destroy'])->name('company.delete');

    Route::get('/program/index', [App\Http\Controllers\CompanyProgramsController::class, 'index'])->name('program.index');
    Route::get('/program/create', [App\Http\Controllers\CompanyProgramsController::class, 'create'])->name('program.create');
    Route::get('/program/edit/{id}', [App\Http\Controllers\CompanyProgramsController::class, 'edit'])->name('program.edit');
    Route::get('/program/show/{id}', [App\Http\Controllers\CompanyProgramsController::class, 'show'])->name('program.show');
    Route::post('/program/store', [App\Http\Controllers\CompanyProgramsController::class, 'store'])->name('program.store');
    Route::get('/program/update/{id}', [App\Http\Controllers\CompanyProgramsController::class, 'update'])->name('program.update');
    Route::get('/program/delete/{id}', [App\Http\Controllers\CompanyProgramsController::class, 'destroy'])->name('program.delete');

    Route::get('/reward/index', [App\Http\Controllers\RewardsController::class, 'index'])->name('reward.index');
    Route::get('/reward/create', [App\Http\Controllers\RewardsController::class, 'create'])->name('reward.create');
    Route::get('/reward/edit/{id}', [App\Http\Controllers\RewardsController::class, 'edit'])->name('reward.edit');
    Route::get('/reward/show/{id}', [App\Http\Controllers\RewardsController::class, 'show'])->name('reward.show');
    Route::post('/reward/store', [App\Http\Controllers\RewardsController::class, 'store'])->name('reward.store');
    Route::get('/reward/update/{id}', [App\Http\Controllers\RewardsController::class, 'update'])->name('reward.update');
    Route::get('/reward/delete/{id}', [App\Http\Controllers\RewardsController::class, 'destroy'])->name('reward.delete');

    // ads
    Route::get('/ad/index', [App\Http\Controllers\AdsController::class, 'index'])->name('ad.index');
    Route::get('/ad/create', [App\Http\Controllers\AdsController::class, 'create'])->name('ad.create');
    Route::get('/ad/edit/{id}', [App\Http\Controllers\AdsController::class, 'edit'])->name('ad.edit');
    Route::get('/ad/show/{id}', [App\Http\Controllers\AdsController::class, 'show'])->name('ad.show');
    Route::post('/ad/store', [App\Http\Controllers\AdsController::class, 'store'])->name('ad.store');
    Route::get('/ad/update/{id}', [App\Http\Controllers\AdsController::class, 'update'])->name('ad.update');
    Route::get('/ad/delete/{id}', [App\Http\Controllers\AdsController::class, 'destroy'])->name('ad.delete');
    //transactions that have been made by the users
    Route::get('/transaction/index', [App\Http\Controllers\TransactionsController::class, 'index'])->name('transaction.index');

    //transfer
    Route::get('/sambaza/index', [App\Http\Controllers\SambazasController::class, 'index'])->name('sambaza.index');
    //redemption
    Route::get('/redemption/index', [App\Http\Controllers\RedemptionsController::class, 'index'])->name('redeem.index');
    Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
    Route::post('/upload-avatar', [App\Http\Controllers\UserController::class,'uploadAvatar'])->name('upload.avatar');
    Route::post('change/password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('change.password');
    Route::post('profile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile.update');

    //notifications
    Route::get('/notifications/create', [App\Http\Controllers\NotificationController::class, 'create'])->name('notifications.create');

    //Virtual CAr
    Route::get('/virtualcard', [App\Http\Controllers\VirtualCardsController::class, 'index'])->name('virtual.index');

    Route::get('/reports/redemptions', [App\Http\Controllers\ReportController::class, 'redemptionReport'])->name('reports.redemption');
    Route::get('/reports/sambazas', [App\Http\Controllers\ReportController::class, 'sambazaReport'])->name('reports.sambaza');
    Route::get('/reports/optinrate', [App\Http\Controllers\ReportController::class, 'optInReport'])->name('reports.optinrate');
});