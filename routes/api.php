<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaxpayerController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login',    [AuthController::class, 'login'])->name('user.login');
    Route::post('logout',   [AuthController::class, 'logout'])->name('user.logout');
    Route::post('refresh',  [AuthController::class, 'refresh'])->name('user.refresh');
    Route::post('me',       [AuthController::class, 'me'])->name('user.me');
    Route::post('register', [AuthController::class, 'register'])->name('user.register');

    Route::get('taxpayers', [TaxpayerController::class, 'view'])->name('taxpayer.view');
    Route::get('taxpayer',  [TaxpayerController::class, 'show'])->name('taxpayer.show');
    Route::post('taxpayer', [TaxpayerController::class, 'create'])->name('taxpayer.create');

});
