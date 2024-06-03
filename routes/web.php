<?php

use Illuminate\Support\Facades\Route;

Route::resource('users', UserController::class);
Route::resource('clients', ClientController::class);
Route::resource('orders',OrderController::class);
Route::resource('inventory',InventoryController::class);
Route::resource('finances',FinanceController::class);
Route::resource('notifications',NotificationController::class);
Route::resource('email_logs',EmailLogController::class);

Route::group(['middleware' =>
['auth']], function() {
    Route::resource('users',UserController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('orders',OrderController::class);
    Route::resource('inventory',InventoryController::class);
    Route::resource('finances',FinanceController::class);
    Route::resource('notifications',NotificationController::class);
    Route::resource('emal_logs',EmailLogController::class);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
