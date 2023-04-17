<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{   
    //ここから追加
    private const SEEDERS = [
        UserSeeder::class,
        CategorySeeder::class,
        ItemSeeder::class,
        Wish_ItemSeeder::class,
        ExpenditureSeeder::class,
        Have_ItemSeeder::class,
    ];
    //ここまで追加
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //ここから追加
         foreach(self::SEEDERS as $seeder) {
            $this->call($seeder);
        }
        //ここまで追加
    }
}
