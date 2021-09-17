<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CreateController;

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
    return view('welcometest');
});

//route handling search capability
Route::get('/search/oligos', [SearchController::class, 'oligos']);
Route::get('/search/plasmids', [SearchController::class, 'plasmids']);
Route::get('/profile/{id}', [ProfileController::class, 'profile']);

Route::post('/create/oligos', [CreateController::class, 'oligos']);
