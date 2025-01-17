<?php

use App\Http\Controllers\PersonnageController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('personnage.index');
});


Route::resource('/personnage', PersonnageController::class);
Route::get('/rechercheDynamique',[PersonnageController::class,'rechercheDynamique']);
Route::get('/triPar/{critere}',[PersonnageController::class,'index']);