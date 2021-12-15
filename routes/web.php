<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KorisnikController;
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

Auth::routes();

Route::get("list-data", [KorisnikController::class, "selectData"]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//layout
Route::get("add-korisnika", [KorisnikController::class, "addKorisnika"]);
//submit i save
Route::post("save-korisnika", [KorisnikController::class, "storeKorisnika"]);
