<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['category_name' => 'Mobiles','created_at' => now(), 'updated_at' => now()],
            ['category_name' => "Shoes",'created_at' => now(), 'updated_at' => now()],
            ['category_name' => "Health & Beauty",'created_at' => now(), 'updated_at' => now()],
            ['category_name' => "TV",'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
