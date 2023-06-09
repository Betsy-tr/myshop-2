<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProduitsController;
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

Route::get('/',[ProduitsController::class,'index'])->name('accueil');

//Filtre par catégorie
Route::get('/filtre/{categorie}',[ProduitsController::class,'index'])->name('filtre.categorie');

//Route détail 
Route::get('/detail/{produit}',[ProduitsController::class,'detail'])->name('accueil.detail');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Ne peuvent ajouter au panier que les utilisateurs connectés
    Route::get('/addtocart/{produit}',[CartController::class,'addToCart'])->name('addtocart');
    Route::get('/cart',[CartController::class,'index'])->name('cart');
});

require __DIR__.'/auth.php';
