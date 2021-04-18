<?php

use App\Http\Controllers\Shop\MainController;
use Illuminate\Support\Facades\Route;

//Route pour l'accueil de Laravel
Route::get('/', function () {return view('welcome');});

//Route pour la page de tout les produits
//avant Laravel 8 :
// Route::get('/home',"app/Http/Controllers/Shop/MainController@showProduit");
// Route::get('/home',"Shop/MainController@showProduit");
Route::get('/AllProduct', [MainController::class, 'MethodAllProduct'])->name('voir_tout_les_produits');

Route::get('/AllProductTest', [MainController::class, 'MethodAllProduct']);

//Route vers un produit
//on peut nommer une route / lui donner un alias  que l'on utilisera dans un href 
//on pourra donc changer l'url comme on le souhaite mais surtout pas l'alias ! 
Route::get('/OneProduct/{id}' , [MainController::class, 'MethodOneProduct'])->name('voir_produit');


Route::get('/categorie/{id}' , [MainController::class, 'MethodViewByCategory'])->name('voir_produit_par_cat');



Route::get('/tag/{id}' , [MainController::class, 'MethodViewByTag'])->name('voir_produit_par_tag');
