<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            'name' => '消しゴム',
            'price' => 50,
            'place' => '奥田商店',
            'date' => '2023-04-05',
            'quantity' => 2,
            'info' => 'この消しゴムはカスがまとまるからお気に入り。',
            'is_reminded' => 1,
            'category_id' => 1,
            'user_id' => 1,
            ]);
    }
}
