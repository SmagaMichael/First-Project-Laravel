<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //on peut créer des produit de démonstration 
        $produit = new Produit();
        $produit->nom = "1er Produit";
        $produit->prix_ht = "25";
        $produit->description = "Description du 1er Produit";
        $produit->photo_principal = "produit.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "2ieme Produit";
        $produit->prix_ht = "25";
        $produit->description = "Description du 2ieme Produit";
        $produit->photo_principal = "produit.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "3ieme Produit";
        $produit->prix_ht = "25";
        $produit->description = "Description du 3ieme Produit";
        $produit->photo_principal = "produit.jpg";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "4ieme Produit";
        $produit->prix_ht = "25";
        $produit->description = "Description du 4ieme Produit";
        $produit->photo_principal = "produit.jpg";
        $produit->save();

        
    }
}
