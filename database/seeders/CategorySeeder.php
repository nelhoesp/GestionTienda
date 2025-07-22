<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('categories')->insert([
            [
                'category_name' => 'Beverages',
                'description' => 'Soft drinks, coffees, teas, beers, and ales',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Condiments',
                'description' => 'Sweet and savory sauces, relishes, spreads, and seasonings',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Confections',
                'description' => 'Desserts, candies, and sweet breads',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Dairy Products',
                'description' => 'Cheeses',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Grains/Cereals',
                'description' => 'Breads, crackers, pasta, and cereal',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Meat/Poultry',
                'description' => 'Prepared meats',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Produce',
                'description' => 'Dried fruit and bean curd',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_name' => 'Seafood',
                'description' => 'Seaweed and fish',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}