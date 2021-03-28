<?php

namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class HeaderComposer{

public function compose(View $view){
    $view->with('categories', Category::WHERE('is_online',1)->get());
}

}