<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showProduit(){
        //Select * from produits  
        //ce qui donnerait l'ensemble des produit de la table

        $produits = Produit::all();
        // dd($produits);

        return view('layouts.showProduit',compact('produits'));
        // ['produits'=>$produits]
    }
}