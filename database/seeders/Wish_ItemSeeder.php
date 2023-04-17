<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Wish_ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('wish_items')->insert([
            'name' => 'comoliのシャツ',
            'price' => 30000,
            'info' => '色はブルーがいい。',
            'category_id' => 2,
            'user_id' => 1,
            ]);
    }
}
