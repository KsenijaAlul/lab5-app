<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;

Route::resource('transactions', TransactionController::class);

Route::get('/', function () {
    return view('welcome');
});
