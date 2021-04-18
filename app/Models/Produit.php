<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo("App\Models\Category");
    }

    public function tags(){
        return $this->BelongsToMany('App\Models\Tag');
    }

    public function recommandations(){
        return $this->belongsToMany('App\Models\Produit','produit_recommande', 'produit_id', 'produit_recommande_id');
    }

}
