<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;

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


//route handling search & create capabilities
Route::get('/search/oligos', [SearchController::class, 'oligos'])->middleware(['auth'])->name('search_oligos');
Route::get('/search/plasmids', [SearchController::class, 'plasmids'])->middleware(['auth'])->name('search_plasmids');
Route::get('/search/strains', [SearchController::class, 'strains'])->middleware(['auth'])->name('search_strains');
Route::get('/search/nystrains', [SearchController::class, 'nonyeaststrains'])->middleware(['auth'])->name('search_nonyeaststrains');

Route::get('/profile/oligos/{id}', [ProfileController::class, 'oligos'])->middleware(['auth'])->name('profile_oligos');
Route::get('/profile/plasmids/{id}', [ProfileController::class, 'plasmids'])->middleware(['auth'])->name('profile_plasmids');
Route::get('/profile/strains/{id}', [ProfileController::class, 'strains'])->middleware(['auth'])->name('profile_strains');
Route::get('/profile/nonyeaststrains/{id}', [ProfileController::class, 'nystrains'])->middleware(['auth'])->name('profile_nystrains');

Route::get('/edit/oligos/{id}', [EditController::class, 'oligos'])->middleware(['auth'])->name('edit_oligos');
Route::get('/edit/plasmids/{id}', [EditController::class, 'plasmids'])->middleware(['auth'])->name('edit_plasmids');
Route::get('/edit/strains/{id}', [EditController::class, 'strains'])->middleware(['auth'])->name('edit_strains');
Route::get('/edit/nystrains/{id}', [EditController::class, 'nystrains'])->middleware(['auth'])->name('edit_nystrains');

Route::post('/save/oligos/{id}', [CreateController::class, 'oligos'])->middleware(['auth'])->name('save_oligos');
Route::post('/save/plasmids/{id}', [CreateController::class, 'plasmids'])->middleware(['auth'])->name('save_plasmids');
Route::post('/save/strains/{id}', [CreateController::class, 'strains'])->middleware(['auth'])->name('save_strains');
Route::post('/save/nonyeaststrains/{id}', [CreateController::class, 'nonyeaststrains'])->middleware(['auth'])->name('save_nystrains');

Route::post('/create/oligos', [CreateController::class, 'oligos'])->middleware(['auth'])->name('oligos_create');
Route::post('/create/plasmids', [CreateController::class, 'plasmids'])->middleware(['auth'])->name('plasmids_create');
Route::post('/create/strains', [CreateController::class, 'strains'])->middleware(['auth'])->name('strains_create');
Route::post('/create/nonyeaststrains', [CreateController::class, 'nonyeaststrains'])->middleware(['auth'])->name('nonyeaststrains_create');


Route::get('/strains', function () {
    Session::forget('last_strains_query');
    return view('strains');
})->middleware(['auth'])->name('strains');

Route::get('/plasmids', function () {
    Session::forget('last_plasmids_query');
    return view('plasmids');
})->middleware(['auth'])->name('plasmids');

Route::get('/nonyeaststrains', function () {
    Session::forget('last_nystrains_query');
    return view('nonyeaststrains');
})->middleware(['auth'])->name('nonyeaststrains');

Route::get('/oligos', function () {
    Session::forget('last_oligos_query');
    return view('oligos');
})->middleware(['auth'])->name('oligos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
