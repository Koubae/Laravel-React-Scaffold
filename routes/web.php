<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

// Make home have some alias
Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'index');
    Route::get('/index', 'index');
});
