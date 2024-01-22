<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;

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

// Route for the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for the result page
Route::get('/result', function () {
    return view('result');
});

// Route for the store function
Route::post('/store', [dataController::class, 'store']);
