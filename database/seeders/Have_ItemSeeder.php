<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Have_ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('have_items')->insert([
            'name' => '消しゴム',
            'quantity' => 3,
            'info' => 'この消しゴムはカスがまとまるからお気に入り。',
            'category_id' => 1,
            'user_id' => 1,
            ]);
    }
}
