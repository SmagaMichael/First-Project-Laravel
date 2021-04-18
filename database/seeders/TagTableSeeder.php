<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->nom = "#Girl";
        $tag->save();

        $tag = new Tag();
        $tag->nom = "#Boy";
        $tag->save();

        $tag = new Tag();
        $tag->nom = "#Liyue";
        $tag->save();

        $tag = new Tag();
        $tag->nom = "#Mondstadt";
        $tag->save();

    }
}
