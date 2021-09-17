<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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
Route::get('/oligos_search', [SearchController::class, 'oligos_search']);
Route::get('/plasmids_search', [SearchController::class, 'plasmids_search']);
