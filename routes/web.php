<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

Route::resource('cores', 'App\Http\Controllers\CoreController');
Route::resource('categorias', 'App\Http\Controllers\CategoriaController');
Route::resource('clientes', 'App\Http\Controllers\ClienteController');
Route::resource('produtos', 'App\Http\Controllers\ProdutoController');
Route::resource('fornecedores', 'App\Http\Controllers\FornecedoreController');

require __DIR__.'/auth.php';
