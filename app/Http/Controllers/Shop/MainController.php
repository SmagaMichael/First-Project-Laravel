<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function MethodAllProduct(){
        //Select * from produits  
        //ce qui donnerait l'ensemble des produit de la table

        $produits = Produit::all();
        // dd($produits);

        return view('layouts.AllProduct',compact('produits'));
        // ['produits'=>$produits]
    }



    //méthode pour voir un seul produit 
    //Select * from produits  WHERE id = ?

    public function MethodOneProduct(Request $request){

        //  dd($request);
        $Oneproduct = Produit::find($request->id);
        return view('layouts.OneProduct',compact('Oneproduct'));
    }
}