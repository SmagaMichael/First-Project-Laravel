<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    public function MethodViewByCategory(Request $request){
        //récupérer toutes les catégories >> is_online == 1
         $categories = Category::WHERE('is_online',1)->get();
        // dd($categories);

        //SELECT * FROM produits = category_id = $request->id
        $produits = Produit::WHERE('category_id', $request->id)->get();
        $category = Category::find($request->id);


        return view('layouts.categorie',compact('categories', 'produits', 'category'));
    }




}