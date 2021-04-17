<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class HeaderComposer{

public function compose(View $view){

    //fonctionne pour la page Touts les personnages 
    $matches = ['is_online' => 1, 'parent_id'=>null];
    $view->with('categories', Category::WHERE($matches)->get());

    // $view->with('categories', Category::WHERE('is_online',1)->get());
}

}