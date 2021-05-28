<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('front', [InventoryProductController::class, 'show']);
Route::view('addNew','addProducts');
Route::post('addNew',[InventoryProductController::class, 'addData']);
Route::get('delete/{id}', [InventoryProductController::class, 'delete']);
Route::get('edit/{id}', [InventoryProductController::class, 'showData']);
Route::get('edit', [InventoryProductController::class, 'update']);