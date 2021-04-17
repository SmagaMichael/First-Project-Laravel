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
        // $category = new Category();
        // $category->nom = "Anemo";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Cryo";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Hydro";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Géo";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Electro";
        // $category->is_online = 1;
        // $category->save();

        // $category = new Category();
        // $category->nom = "Pyro";
        // $category->is_online = 1;
        // $category->save();
        
//pour les Anemo
                $category = new Category();
                $category->nom = "Arc";
                $category->is_online = 1;
                $category->parent_id = 1;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à une main";
                $category->is_online = 1;
                $category->parent_id = 1;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à deux main";
                $category->is_online = 1;
                $category->parent_id = 1;
                $category->save();

                $category = new Category();
                $category->nom = "Grimoire / Catalyseurs";
                $category->is_online = 1;
                $category->parent_id = 1;
                $category->save();

                $category = new Category();
                $category->nom = "Arme d'Hast";
                $category->is_online = 1;
                $category->parent_id = 1;
                $category->save();

//pour les Cryo
                $category = new Category();
                $category->nom = "Arc";
                $category->is_online = 1;
                $category->parent_id = 2;
                $category->save();
        
                $category = new Category();
                $category->nom = "Epée à une main";
                $category->is_online = 1;
                $category->parent_id = 2;
                $category->save();
        
                $category = new Category();
                $category->nom = "Epée à deux main";
                $category->is_online = 1;
                $category->parent_id = 2;
                $category->save();
        
                $category = new Category();
                $category->nom = "Grimoire / Catalyseurs";
                $category->is_online = 1;
                $category->parent_id = 2;
                $category->save();
        
                $category = new Category();
                $category->nom = "Arme d'Hast";
                $category->is_online = 1;
                $category->parent_id = 2;
                $category->save();

//pour les Hydro
                $category = new Category();
                $category->nom = "Arc";
                $category->is_online = 1;
                $category->parent_id = 3;
                $category->save();
        
                $category = new Category();
                $category->nom = "Epée à une main";
                $category->is_online = 1;
                $category->parent_id = 3;
                $category->save();
        
                $category = new Category();
                $category->nom = "Epée à deux main";
                $category->is_online = 1;
                $category->parent_id = 3;
                $category->save();
        
                $category = new Category();
                $category->nom = "Grimoire / Catalyseurs";
                $category->is_online = 1;
                $category->parent_id = 3;
                $category->save();
        
                $category = new Category();
                $category->nom = "Arme d'Hast";
                $category->is_online = 1;
                $category->parent_id = 3;
                $category->save();


//pour les Géo
                $category = new Category();
                $category->nom = "Arc";
                $category->is_online = 1;
                $category->parent_id = 4;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à une main";
                $category->is_online = 1;
                $category->parent_id = 4;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à deux main";
                $category->is_online = 1;
                $category->parent_id = 4;
                $category->save();

                $category = new Category();
                $category->nom = "Grimoire / Catalyseurs";
                $category->is_online = 1;
                $category->parent_id = 4;
                $category->save();

                $category = new Category();
                $category->nom = "Arme d'Hast";
                $category->is_online = 1;
                $category->parent_id = 4;
                $category->save();

//pour les Electro
                $category = new Category();
                $category->nom = "Arc";
                $category->is_online = 1;
                $category->parent_id = 5;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à une main";
                $category->is_online = 1;
                $category->parent_id = 5;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à deux main";
                $category->is_online = 1;
                $category->parent_id = 5;
                $category->save();

                $category = new Category();
                $category->nom = "Grimoire / Catalyseurs";
                $category->is_online = 1;
                $category->parent_id = 5;
                $category->save();

                $category = new Category();
                $category->nom = "Arme d'Hast";
                $category->is_online = 1;
                $category->parent_id = 5;
                $category->save();

//pour les Pyro
                $category = new Category();
                $category->nom = "Arc";
                $category->is_online = 1;
                $category->parent_id = 6;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à une main";
                $category->is_online = 1;
                $category->parent_id = 6;
                $category->save();

                $category = new Category();
                $category->nom = "Epée à deux main";
                $category->is_online = 1;
                $category->parent_id = 6;
                $category->save();

                $category = new Category();
                $category->nom = "Grimoire / Catalyseurs";
                $category->is_online = 1;
                $category->parent_id = 6;
                $category->save();

                $category = new Category();
                $category->nom = "Arme d'Hast";
                $category->is_online = 1;
                $category->parent_id = 6;
                $category->save();
    }
}
