<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

use App\Http\Controllers\VoitureController;
use App\Http\Controllers\CategorieController;



Route::get('/bonjour', function () {
    return view('welcome');
});
Route::get('hello',function(){
    return 'Hello World';
});

//route pour categorie
Route::get('/',[CategorieController::class,'index'])->name('categorie.index');
Route::get('/formulaire',[CategorieController::class,'create'])->name('categorie.create');
Route::post('/ajouter',[CategorieController::class,'store'])->name('categorie.store');
Route::get('/detail/{categorie}',[CategorieController::class,'show'])->name('categorie.show');
Route::get('/edite/{categorie}',[CategorieController::class,'edit'])->name('categorie.edit');
Route::put('/update/{categorie}',[CategorieController::class,'update'])->name('categorie.update');
Route::delete('/delete/{categorie}',[CategorieController::class,'destroy'])->name('categorie.delete');
// route pour voirure
Route::get('/form',[VoitureController::class,'create'])->name('voiture.create');
Route::post('/ajoutvoiture',[VoitureController::class,'store'])->name('voiture.store');

//route pour produit
// Route::get('/produits',[ProduitController::class,'index'])->name('produit.index');
// Route::get('/produitformulaire',[ProduitController::class,'create'])->name('produit.create');
// Route::post('/ajouterproduit',[ProduitController::class,'store'])->name('produit.store');

//route resouce nous facalite la tache pour avoir  une liste des routes le crud
 Route::resource('produits',ProduitController::class);