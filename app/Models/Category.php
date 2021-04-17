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
}
