<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->nom = "Anemo";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom = "Cryo";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom = "Hydro";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom = "Géo";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom = "Electro";
        $category->is_online = 1;
        $category->save();

        $category = new Category();
        $category->nom = "Pyro";
        $category->is_online = 1;
        $category->save();
        
    }
}
