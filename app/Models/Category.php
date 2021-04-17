<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use HasFactory;

    //récupérer la catégorie parent d'une catégorie
    //OneToMany Reverse
    public function parent(){
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }

    //on récupére les categorie enfant d'une catégorie 
    //OneToMany
    public function childrens(){
        return $this->hasMany('App\Models\Category', 'parent_id');
    }



    //récupérer les produits de la categorie => OneToMany
    public function produitsParent(){
        return $this->hasMany('App\Models\Produit');
    }


    //Recuperer des produits situés dans une catégorie enfant au travers d'une catégorie parent
    public function produitsChild(){
        return $this->hasManyThrough('App\Models\Produit', 'App\Models\Category', 'parent_id', 'category_id');
    }

    //va retourner les produits de toute catégorie confondu 
    //fusion des 2 méthodes au dessus
    public function produits(){
        // $produits = $this->produitsParent(); on récupere bien les différentes collection
        $produits = $this->produitsParent()->get()->merge($this->produitsChild()->get());
        // dd($produits);
        return $produits;
    }

}
