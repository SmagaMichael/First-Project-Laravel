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
        $produit->photo_avatar = "littleJean.png";
        $produit->photo_principal = "Jean.png";
        $produit->save();
        
        $produit = new Produit();
        $produit->nom = "Amber";
        $produit->prix_ht = "25";
        $produit->description = "Description de Amber";
        $produit->photo_avatar = "littleAmber.png";
        $produit->photo_principal = "Amber.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Lisa";
        $produit->prix_ht = "25";
        $produit->description = "Description de Lisa";
        $produit->photo_avatar = "littleLisa.png";
        $produit->photo_principal = "Lisa.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Kaeya";
        $produit->prix_ht = "25";
        $produit->description = "Description de Kaeya";
        $produit->photo_avatar = "littleKaeya.png";
        $produit->photo_principal = "Kaeya.png";
        $produit->save();
        
        $produit = new Produit();
        $produit->nom = "Barbara";
        $produit->prix_ht = "25";
        $produit->description = "Description de Barbara";
        $produit->photo_avatar = "littleBarbara.png";
        $produit->photo_principal = "Barbara.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Diluc";
        $produit->prix_ht = "25";
        $produit->description = "Description de Diluc";
        $produit->photo_avatar = "littleDiluc.png";
        $produit->photo_principal = "Diluc.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Razor";
        $produit->prix_ht = "25";
        $produit->description = "Description de Razor";
        $produit->photo_avatar = "littleRazor.png";
        $produit->photo_principal = "Razor.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Venti";
        $produit->prix_ht = "25";
        $produit->description = "Description de Venti";
        $produit->photo_avatar = "littleVenti.png";
        $produit->photo_principal = "Venti.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Klee";
        $produit->prix_ht = "25";
        $produit->description = "Description de Klee";
        $produit->photo_avatar = "littleKlee.png";
        $produit->photo_principal = "Klee.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Bennett";
        $produit->prix_ht = "25";
        $produit->description = "Description de Bennett";
        $produit->photo_avatar = "littleBennett.png";
        $produit->photo_principal = "Bennett.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Noelle";
        $produit->prix_ht = "25";
        $produit->description = "Description de Noelle";
        $produit->photo_avatar = "littleNoelle.png";
        $produit->photo_principal = "Noelle.png";
        $produit->save();
        

        $produit = new Produit();
        $produit->nom = "Fischl";
        $produit->prix_ht = "25";
        $produit->description = "Description de Fischl";
        $produit->photo_avatar = "littleFischl.png";
        $produit->photo_principal = "Fischl.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Sucrose";
        $produit->prix_ht = "25";
        $produit->description = "Description de Sucrose";
        $produit->photo_avatar = "littleSucrose.png";
        $produit->photo_principal = "Sucrose.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Mona";
        $produit->prix_ht = "25";
        $produit->description = "Description de Mona";
        $produit->photo_avatar = "littleMona.png";
        $produit->photo_principal = "Mona.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Diona";
        $produit->prix_ht = "25";
        $produit->description = "Description de Diona";
        $produit->photo_avatar = "littleDiona.png";
        $produit->photo_principal = "Diona.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Albedo";
        $produit->prix_ht = "25";
        $produit->description = "Description de Albedo";
        $produit->photo_avatar = "littleAlbedo.png";
        $produit->photo_principal = "Albedo.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xiao";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xiao";
        $produit->photo_avatar = "littleXiao.png";
        $produit->photo_principal = "Xiao.png";
        $produit->save();
        

        $produit = new Produit();
        $produit->nom = "Beidou";
        $produit->prix_ht = "25";
        $produit->description = "Description de Beidou";
        $produit->photo_avatar = "littleBeidou.png";
        $produit->photo_principal = "Beidou.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Ningguang";
        $produit->prix_ht = "25";
        $produit->description = "Description de Ningguang";
        $produit->photo_avatar = "littleNingguang.png";
        $produit->photo_principal = "Ningguang.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xiangling";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xiangling";
        $produit->photo_avatar = "littleXiangling.png";
        $produit->photo_principal = "Xiangling.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xingqiu";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xingqiu";
        $produit->photo_avatar = "littleXingqiu.png";
        $produit->photo_principal = "Xingqiu.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Chongyun";
        $produit->prix_ht = "25";
        $produit->description = "Description de Chongyun";
        $produit->photo_avatar = "littleChongyun.png";
        $produit->photo_principal = "Chongyun.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Qiqi";
        $produit->prix_ht = "25";
        $produit->description = "Description de Qiqi";
        $produit->photo_avatar = "littleQiqi.png";
        $produit->photo_principal = "Qiqi.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Keqing";
        $produit->prix_ht = "25";
        $produit->description = "Description de Keqing";
        $produit->photo_avatar = "littleKeqing.png";
        $produit->photo_principal = "Keqing.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Tartaglia";
        $produit->prix_ht = "25";
        $produit->description = "Description de Tartaglia";
        $produit->photo_avatar = "littleTartaglia.png";
        $produit->photo_principal = "Tartaglia.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Zhongli";
        $produit->prix_ht = "25";
        $produit->description = "Description de Zhongli";
        $produit->photo_avatar = "littleZhongli.png";
        $produit->photo_principal = "Zhongli.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Xinyan";
        $produit->prix_ht = "25";
        $produit->description = "Description de Xinyan";
        $produit->photo_avatar = "littleXinyan.png";
        $produit->photo_principal = "Xinyan.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "Ganyu";
        $produit->prix_ht = "25";
        $produit->description = "Description de Ganyu";
        $produit->photo_avatar = "littleGanyu.png";
        $produit->photo_principal = "Ganyu.png";
        $produit->save();

        $produit = new Produit();
        $produit->nom = "HuTao";
        $produit->prix_ht = "25";
        $produit->description = "Description de HuTao";
        $produit->photo_avatar = "littleHuTao.png";
        $produit->photo_principal = "HuTao.png";
        $produit->save();




        


        
    }
}
