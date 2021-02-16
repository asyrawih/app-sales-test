<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Generate User with Products Relation
         User::factory(10)
                ->has(Product::factory() , 'products')
                ->create();
         User::factory()->create([
             'email' => 'hasyrawi@gmail.com'
         ]);
    }
}
