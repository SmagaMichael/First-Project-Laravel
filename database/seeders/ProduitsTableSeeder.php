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
        $produit->nom = "Jean";
        $produit->prix_ht = "25";
        $produit->description = "Description de Jean";
        $produit->photo_principal = "littleJean.png";
        $produit->save();
        
        $produit = new Produit();
        $produit->nom = "Amber";
        $produit->prix_ht = "25";
        $produit->description = "Description de Amber";
        $produit->photo_principal = "littleAmber.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Lisa";
        $produit->prix_ht = "25";
        $produit->description = "Description de Lisa";
        $produit->photo_principal = "littleLisa.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Kaeya";
        $produit->prix_ht = "25";
        $produit->description = "Description de Kaeya";
        $produit->photo_principal = "littleKaeya.png";
        $produit->save();
        
        $produit = new Produit();
        $produit->nom = "Barbara";
        $produit->prix_ht = "25";
        $produit->description = "Description de Barbara";
        $produit->photo_principal = "littleBarbara.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Diluc";
        $produit->prix_ht = "25";
        $produit->description = "Description de Diluc";
        $produit->photo_principal = "littleDiluc.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Razor";
        $produit->prix_ht = "25";
        $produit->description = "Description de Razor";
        $produit->photo_principal = "littleRazor.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Venti";
        $produit->prix_ht = "25";
        $produit->description = "Description de Venti";
        $produit->photo_principal = "littleVenti.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Klee";
        $produit->prix_ht = "25";
        $produit->description = "Description de Klee";
        $produit->photo_principal = "littleKlee.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Bennett";
        $produit->prix_ht = "25";
        $produit->description = "Description de Bennett";
        $produit->photo_principal = "littleBennett.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Noelle";
        $produit->prix_ht = "25";
        $produit->description = "Description de Noelle";
        $produit->photo_principal = "littleNoelle.png";
        $produit->save();
        

        $produit = new Produit();
        $produit->nom = "Fischl";
        $produit->prix_ht = "25";
        $produit->description = "Description de Fischl";
        $produit->photo_principal = "littleFischl.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sucrose";
        $produit->prix_ht = "25";
        $produit->description = "Description de Sucrose";
        $produit->photo_principal = "littleSucrose.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Mona";
        $produit->prix_ht = "25";
        $produit->description = "Description de Mona";
        $produit->photo_principal = "littleMona.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Diona";
        $produit->prix_ht = "25";
        $produit->description = "Description de Diona";
        $produit->photo_principal = "littleDiona.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Albedo";
        $produit->prix_ht = "25";
        $produit->description = "Description de Albedo";
        $produit->photo_principal = "littleAlbedo.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xiao";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xiao";
        $produit->photo_principal = "littleXiao.png";
        $produit->save();
        

        $produit = new Produit();
        $produit->nom = "Beidou";
        $produit->prix_ht = "25";
        $produit->description = "Description de Beidou";
        $produit->photo_principal = "littleBeidou.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Ningguang";
        $produit->prix_ht = "25";
        $produit->description = "Description de Ningguang";
        $produit->photo_principal = "littleNingguang.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xiangling";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xiangling";
        $produit->photo_principal = "littleXiangling.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xingqiu";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xingqiu";
        $produit->photo_principal = "littleXingqiu.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chongyun";
        $produit->prix_ht = "25";
        $produit->description = "Description de Chongyun";
        $produit->photo_principal = "littleChongyun.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Qiqi";
        $produit->prix_ht = "25";
        $produit->description = "Description de Qiqi";
        $produit->photo_principal = "littleQiqi.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Keqing";
        $produit->prix_ht = "25";
        $produit->description = "Description de Keqing";
        $produit->photo_principal = "littleKeqing.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Tartaglia";
        $produit->prix_ht = "25";
        $produit->description = "Description de Tartaglia";
        $produit->photo_principal = "littleTartaglia.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Zhongli";
        $produit->prix_ht = "25";
        $produit->description = "Description de Zhongli";
        $produit->photo_principal = "littleZhongli.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xinyan";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xinyan";
        $produit->photo_principal = "littleXinyan.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Ganyu";
        $produit->prix_ht = "25";
        $produit->description = "Description de Ganyu";
        $produit->photo_principal = "littleGanyu.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "HuTao";
        $produit->prix_ht = "25";
        $produit->description = "Description de HuTao";
        $produit->photo_principal = "littleHuTao.png";
        $produit->save();




        


        
    }
}
