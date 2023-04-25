<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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
    return view('dashboard');
});

Route::get('/', [DataController::class, 'home']);
Route::get('/dashboard', [DataController::class, 'home']);

Route::get('/table', function () {
    return view('table');
});

Route::get('/set', [DataController::class, 'showData']);
Route::post('storeData', [DataController::class, 'storeData']);
Route::post('displaySet', [DataController::class, 'displaySet']);
Route::post('createTable', [DataController::class, 'createTable']);