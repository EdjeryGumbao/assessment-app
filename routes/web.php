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
Route::get('/preview', [DataController::class, 'previewSet']);

Route::get('/table', function () {
    return view('table');
});

Route::get('/set', [DataController::class, 'showData']);
Route::post('storeQuestion', [DataController::class, 'storeQuestion']);
Route::post('editQuestion', [DataController::class, 'editQuestion']);
Route::post('deleteQuestion', [DataController::class, 'deleteQuestion']);

Route::post('displaySet', [DataController::class, 'displaySet']);
Route::post('createSet', [DataController::class, 'createSet']);
Route::post('deleteSet', [DataController::class, 'deleteSet']);
Route::post('previewSet', [DataController::class, 'previewSet']);