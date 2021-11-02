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
    return view('welcome');
})->name('test');


//route handling search capability
Route::get('/search/oligos', [SearchController::class, 'oligos'])->middleware(['auth'])->name('search_oligos');
Route::get('/search/plasmids', [SearchController::class, 'plasmids'])->middleware(['auth'])->name('plasmids');
Route::get('/profile/{id}', [ProfileController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::post('/create/oligos', [CreateController::class, 'oligos'])->middleware(['auth'])->name('oligos_create');



Route::get('/strains', function () {
    return view('strains');
})->middleware(['auth'])->name('strains');

Route::get('/plasmids', function () {
    return view('plasmids');
})->middleware(['auth'])->name('plasmids');

Route::get('/nonyeaststrains', function () {
    return view('nonyeaststrains');
})->middleware(['auth'])->name('nonyeaststrains');

Route::get('/oligos', function () {
    return view('oligos');
})->middleware(['auth'])->name('oligos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
