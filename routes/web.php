<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Requests\projectFormRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProjectController::class, 'index'])
    ->name('project.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // rotta per pagina create e creare un nuovo elemento 
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    // rotta per creazione nuovo progetto
    Route::post('/project/create', [ProjectController::class, 'store'])->name('project.edit');
    // rotta per far vedere il progetto cliccato
    Route::get('/project/{id}', [ ProjectController :: class, 'show']) -> name('project.show');
    // rotta per cancellare il progetto cliccato
    Route::delete('/project/{id}', [ ProjectController :: class, 'destroy']) -> name('project.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
