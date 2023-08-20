<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurbineController;
use App\Http\Controllers\ComponentController;

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

Route::get('/greeting', function () {
    return 'Hello World';
});

//Turbines
Route::get('/turbine/show', [TurbineController::class, 'show']);


//Components
Route::get('/components/show', [ComponentController::class, 'show']);