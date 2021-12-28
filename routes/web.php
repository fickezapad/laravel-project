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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("add-korisnika", [KorisnikController::class, "addKorisnika"]);
Route::post("save-korisnika", [KorisnikController::class, "storeKorisnika"]);
Route::get("list-data", [KorisnikController::class, "selectData"]);
require __DIR__ . '/auth.php';
