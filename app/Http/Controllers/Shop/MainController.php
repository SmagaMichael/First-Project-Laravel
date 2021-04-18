<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Produit;
use App\Models\Tag;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function MethodAllProduct(){
        //Select * from produits  
        //ce qui donnerait l'ensemble des produit de la table

        // $produits = Produit::all(); //afin d'améliorer le nombre de requete on commente cette ligne (pour la garder)
        //et on la reprend et on la modifie en dessous par :  $produits = Produit::with('category')->get(); 
        //on passe de 33requetes a 4 :o 
        $produits = Produit::with('category')->get(); 
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
        $matches = ['is_online' => 1, 'parent_id'=>null];
        $categories = Category::WHERE($matches)->get();
        // dd($categories);

        //SELECT * FROM produits = category_id = $request->id

        //$produits = Produit::WHERE('category_id', $request->id)->get();
        $category = Category::find($request->id);
        // dd($category->produitsParent); //produitsParent et produitsChild viennent des méthodes dans Category.php
        // dd($category->produitsChild);
        // dd($category->produits());
        $produits = $category->produits();



        return view('layouts.categorie',compact('categories', 'produits', 'category'));
    }

    public function MethodViewByTag(Request $request){
        $tag = Tag::find($request->id);
        $produits = $tag->produits;

        $matches = ['is_online' => 1, 'parent_id'=>null];
        $categories = Category::WHERE($matches)->get();

        return view('layouts.categorie',compact('categories','produits', 'tag'));
    }



}