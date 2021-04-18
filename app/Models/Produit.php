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



}
