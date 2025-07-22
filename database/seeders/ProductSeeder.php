<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $products = [
            [
                'product_name' => "Chais",
                'supplier_id' => 1,
                'category_id' => 1,
                'unit' => "10 boxes x 20 bags",
                'price' => 18.00
            ],
            [
                'product_name' => "Chang",
                'supplier_id' => 1,
                'category_id' => 1,
                'unit' => "24 - 12 oz bottles",
                'price' => 19.00
            ],
            [
                'product_name' => "Aniseed Syrup",
                'supplier_id' => 1,
                'category_id' => 2,
                'unit' => "12 - 550 ml bottles",
                'price' => 10.00
            ],
            [
                'product_name' => "Chef Anton's Cajun Seasoning",
                'supplier_id' => 2,
                'category_id' => 2,
                'unit' => "48 - 6 oz jars",
                'price' => 22.00
            ],
            [
                'product_name' => "Chef Anton's Gumbo Mix",
                'supplier_id' => 2,
                'category_id' => 2,
                'unit' => "36 boxes",
                'price' => 21.35
            ],
            [
                'product_name' => "Grandma's Boysenberry Spread",
                'supplier_id' => 3,
                'category_id' => 2,
                'unit' => "12 - 8 oz jars",
                'price' => 25.00
            ],
            [
                'product_name' => "Uncle Bob's Organic Dried Pears",
                'supplier_id' => 3,
                'category_id' => 7,
                'unit' => "12 - 1 lb pkgs.",
                'price' => 30.00
            ],
            [
                'product_name' => "Northwoods Cranberry Sauce",
                'supplier_id' => 3,
                'category_id' => 2,
                'unit' => "12 - 12 oz jars",
                'price' => 40.00
            ],
            [
                'product_name' => "Mishi Kobe Niku",
                'supplier_id' => 4,
                'category_id' => 6,
                'unit' => "18 - 500 g pkgs.",
                'price' => 97.00
            ],
            [
                'product_name' => "Ikura",
                'supplier_id' => 4,
                'category_id' => 8,
                'unit' => "12 - 200 ml jars",
                'price' => 31.00
            ],
            [
                'product_name' => "Queso Cabrales",
                'supplier_id' => 5,
                'category_id' => 4,
                'unit' => "1 kg pkg.",
                'price' => 21.00
            ],
            [
                'product_name' => "Queso Manchego La Pastora",
                'supplier_id' => 5,
                'category_id' => 4,
                'unit' => "10 - 500 g pkgs.",
                'price' => 38.00
            ],
            [
                'product_name' => "Konbu",
                'supplier_id' => 6,
                'category_id' => 8,
                'unit' => "2 kg box",
                'price' => 6.00
            ],
            [
                'product_name' => "Tofu",
                'supplier_id' => 6,
                'category_id' => 7,
                'unit' => "40 - 100 g pkgs.",
                'price' => 23.25
            ],
            [
                'product_name' => "Genen Shouyu",
                'supplier_id' => 6,
                'category_id' => 2,
                'unit' => "24 - 250 ml bottles",
                'price' => 15.50
            ],
            [
                'product_name' => "Pavlova",
                'supplier_id' => 7,
                'category_id' => 3,
                'unit' => "32 - 500 g boxes",
                'price' => 17.45
            ],
            [
                'product_name' => "Alice Mutton",
                'supplier_id' => 7,
                'category_id' => 6,
                'unit' => "20 - 1 kg tins",
                'price' => 39.00
            ],
            [
                'product_name' => "Carnarvon Tigers",
                'supplier_id' => 7,
                'category_id' => 8,
                'unit' => "16 kg pkg.",
                'price' => 62.50
            ],
            [
                'product_name' => "Teatime Chocolate Biscuits",
                'supplier_id' => 8,
                'category_id' => 3,
                'unit' => "10 boxes x 12 pieces",
                'price' => 9.20
            ],
            [
                'product_name' => "Sir Rodney's Marmalade",
                'supplier_id' => 8,
                'category_id' => 3,
                'unit' => "30 gift boxes",
                'price' => 81.00
            ],
            [
                'product_name' => "Sir Rodney's Scones",
                'supplier_id' => 8,
                'category_id' => 3,
                'unit' => "24 pkgs. x 4 pieces",
                'price' => 10.00
            ],
            [
                'product_name' => "Gustaf's Knäckebröd",
                'supplier_id' => 9,
                'category_id' => 5,
                'unit' => "24 - 500 g pkgs.",
                'price' => 21.00
            ],
            [
                'product_name' => "Tunnbröd",
                'supplier_id' => 9,
                'category_id' => 5,
                'unit' => "12 - 250 g pkgs.",
                'price' => 9.00
            ],
            [
                'product_name' => "Guaraná Fantástica",
                'supplier_id' => 10,
                'category_id' => 1,
                'unit' => "12 - 355 ml cans",
                'price' => 4.50
            ],
            [
                'product_name' => "NuNuCa Nuß-Nougat-Creme",
                'supplier_id' => 11,
                'category_id' => 3,
                'unit' => "20 - 450 g glasses",
                'price' => 14.00
            ],
            [
                'product_name' => "Gumbär Gummibärchen",
                'supplier_id' => 11,
                'category_id' => 3,
                'unit' => "100 - 250 g bags",
                'price' => 31.23
            ],
            [
                'product_name' => "Schoggi Schokolade",
                'supplier_id' => 11,
                'category_id' => 3,
                'unit' => "100 - 100 g pieces",
                'price' => 43.90
            ],
            [
                'product_name' => "Rössle Sauerkraut",
                'supplier_id' => 12,
                'category_id' => 7,
                'unit' => "25 - 825 g cans",
                'price' => 45.60
            ],
            [
                'product_name' => "Thüringer Rostbratwurst",
                'supplier_id' => 12,
                'category_id' => 6,
                'unit' => "50 bags x 30 sausgs.",
                'price' => 123.79
            ],
            [
                'product_name' => "Nord-Ost Matjeshering",
                'supplier_id' => 13,
                'category_id' => 8,
                'unit' => "10 - 200 g glasses",
                'price' => 25.89
            ],
            [
                'product_name' => "Gorgonzola Telino",
                'supplier_id' => 14,
                'category_id' => 4,
                'unit' => "12 - 100 g pkgs",
                'price' => 12.50
            ],
            [
                'product_name' => "Mascarpone Fabioli",
                'supplier_id' => 14,
                'category_id' => 4,
                'unit' => "24 - 200 g pkgs.",
                'price' => 32.00
            ],
            [
                'product_name' => "Geitost",
                'supplier_id' => 15,
                'category_id' => 4,
                'unit' => "500 g",
                'price' => 2.50
            ],
            [
                'product_name' => "Sasquatch Ale",
                'supplier_id' => 16,
                'category_id' => 1,
                'unit' => "24 - 12 oz bottles",
                'price' => 14.00
            ],
            [
                'product_name' => "Steeleye Stout",
                'supplier_id' => 16,
                'category_id' => 1,
                'unit' => "24 - 12 oz bottles",
                'price' => 18.00
            ],
            [
                'product_name' => "Inlagd Sill",
                'supplier_id' => 17,
                'category_id' => 8,
                'unit' => "24 - 250 g jars",
                'price' => 19.00
            ],
            [
                'product_name' => "Gravad lax",
                'supplier_id' => 17,
                'category_id' => 8,
                'unit' => "12 - 500 g pkgs.",
                'price' => 26.00
            ],
            [
                'product_name' => "Côte de Blaye",
                'supplier_id' => 18,
                'category_id' => 1,
                'unit' => "12 - 75 cl bottles",
                'price' => 263.50
            ],
            [
                'product_name' => "Chartreuse verte",
                'supplier_id' => 18,
                'category_id' => 1,
                'unit' => "750 cc per bottle",
                'price' => 18.00
            ],
            [
                'product_name' => "Boston Crab Meat",
                'supplier_id' => 19,
                'category_id' => 8,
                'unit' => "24 - 4 oz tins",
                'price' => 18.40
            ],
            [
                'product_name' => "Jack's New England Clam Chowder",
                'supplier_id' => 19,
                'category_id' => 8,
                'unit' => "12 - 12 oz cans",
                'price' => 9.65
            ],
            [
                'product_name' => "Singaporean Hokkien Fried Mee",
                'supplier_id' => 20,
                'category_id' => 5,
                'unit' => "32 - 1 kg pkgs.",
                'price' => 14.00
            ],
            [
                'product_name' => "Ipoh Coffee",
                'supplier_id' => 20,
                'category_id' => 1,
                'unit' => "16 - 500 g tins",
                'price' => 46.00
            ],
            [
                'product_name' => "Gula Malacca",
                'supplier_id' => 20,
                'category_id' => 2,
                'unit' => "20 - 2 kg bags",
                'price' => 19.45
            ],
            [
                'product_name' => "Røgede sild",
                'supplier_id' => 21,
                'category_id' => 8,
                'unit' => "1k pkg.",
                'price' => 9.50
            ],
            [
                'product_name' => "Spegesild",
                'supplier_id' => 21,
                'category_id' => 8,
                'unit' => "4 - 450 g glasses",
                'price' => 12.00
            ],
            [
                'product_name' => "Zaanse koeken",
                'supplier_id' => 22,
                'category_id' => 3,
                'unit' => "10 - 4 oz boxes",
                'price' => 9.50
            ],
            [
                'product_name' => "Chocolade",
                'supplier_id' => 22,
                'category_id' => 3,
                'unit' => "10 pkgs.",
                'price' => 12.75
            ],
            [
                'product_name' => "Maxilaku",
                'supplier_id' => 23,
                'category_id' => 3,
                'unit' => "24 - 50 g pkgs.",
                'price' => 20.00
            ],
            [
                'product_name' => "Valkoinen suklaa",
                'supplier_id' => 23,
                'category_id' => 3,
                'unit' => "12 - 100 g bars",
                'price' => 16.25
            ],
            [
                'product_name' => "Manjimup Dried Apples",
                'supplier_id' => 24,
                'category_id' => 7,
                'unit' => "50 - 300 g pkgs.",
                'price' => 53.00
            ],
            [
                'product_name' => "Filo Mix",
                'supplier_id' => 24,
                'category_id' => 5,
                'unit' => "16 - 2 kg boxes",
                'price' => 7.00
            ],
            [
                'product_name' => "Perth Pasties",
                'supplier_id' => 24,
                'category_id' => 6,
                'unit' => "48 pieces",
                'price' => 32.80
            ],
            [
                'product_name' => "Tourtière",
                'supplier_id' => 25,
                'category_id' => 6,
                'unit' => "16 pies",
                'price' => 7.45
            ],
            [
                'product_name' => "Pâté chinois",
                'supplier_id' => 25,
                'category_id' => 6,
                'unit' => "24 boxes x 2 pies",
                'price' => 24.00
            ],
            [
                'product_name' => "Gnocchi di nonna Alice",
                'supplier_id' => 26,
                'category_id' => 5,
                'unit' => "24 - 250 g pkgs.",
                'price' => 38.00
            ],
            [
                'product_name' => "Ravioli Angelo",
                'supplier_id' => 26,
                'category_id' => 5,
                'unit' => "24 - 250 g pkgs.",
                'price' => 19.50
            ],
            [
                'product_name' => "Escargots de Bourgogne",
                'supplier_id' => 27,
                'category_id' => 8,
                'unit' => "24 pieces",
                'price' => 13.25
            ],
            [
                'product_name' => "Raclette Courdavault",
                'supplier_id' => 28,
                'category_id' => 4,
                'unit' => "5 kg pkg.",
                'price' => 55.00
            ],
            [
                'product_name' => "Camembert Pierrot",
                'supplier_id' => 28,
                'category_id' => 4,
                'unit' => "15 - 300 g rounds",
                'price' => 34.00
            ],
            [
                'product_name' => "Sirop d'érable",
                'supplier_id' => 29,
                'category_id' => 2,
                'unit' => "24 - 500 ml bottles",
                'price' => 28.50
            ],
            [
                'product_name' => "Tarte au sucre",
                'supplier_id' => 29,
                'category_id' => 3,
                'unit' => "48 pies",
                'price' => 49.30
            ],
            [
                'product_name' => "Vegie-spread",
                'supplier_id' => 7,
                'category_id' => 2,
                'unit' => "15 - 625 g jars",
                'price' => 43.90
            ],
            [
                'product_name' => "Wimmers gute Semmelknödel",
                'supplier_id' => 12,
                'category_id' => 5,
                'unit' => "20 bags x 4 pieces",
                'price' => 33.25
            ],
            [
                'product_name' => "Louisiana Fiery Hot Pepper Sauce",
                'supplier_id' => 2,
                'category_id' => 2,
                'unit' => "32 - 8 oz bottles",
                'price' => 21.05
            ],
            [
                'product_name' => "Louisiana Hot Spiced Okra",
                'supplier_id' => 2,
                'category_id' => 2,
                'unit' => "24 - 8 oz jars",
                'price' => 17.00
            ],
            [
                'product_name' => "Laughing Lumberjack Lager",
                'supplier_id' => 16,
                'category_id' => 1,
                'unit' => "24 - 12 oz bottles",
                'price' => 14.00
            ],
            [
                'product_name' => "Scottish Longbreads",
                'supplier_id' => 8,
                'category_id' => 3,
                'unit' => "10 boxes x 8 pieces",
                'price' => 12.50
            ],
            [
                'product_name' => "Gudbrandsdalsost",
                'supplier_id' => 15,
                'category_id' => 4,
                'unit' => "10 kg pkg.",
                'price' => 36.00
            ],
            [
                'product_name' => "Outback Lager",
                'supplier_id' => 7,
                'category_id' => 1,
                'unit' => "24 - 355 ml bottles",
                'price' => 15.00
            ],
            [
                'product_name' => "Fløtemysost",
                'supplier_id' => 15,
                'category_id' => 4,
                'unit' => "10 - 500 g pkgs.",
                'price' => 21.50
            ],
            [
                'product_name' => "Mozzarella di Giovanni",
                'supplier_id' => 14,
                'category_id' => 4,
                'unit' => "24 - 200 g pkgs.",
                'price' => 34.80
            ],
            [
                'product_name' => "Röd Kaviar",
                'supplier_id' => 17,
                'category_id' => 8,
                'unit' => "24 - 150 g jars",
                'price' => 15.00
            ],
            [
                'product_name' => "Longlife Tofu",
                'supplier_id' => 4,
                'category_id' => 7,
                'unit' => "5 kg pkg.",
                'price' => 10.00
            ],
            [
                'product_name' => "Rhönbräu Klosterbier",
                'supplier_id' => 12,
                'category_id' => 1,
                'unit' => "24 - 0.5 l bottles",
                'price' => 7.75
            ],
            [
                'product_name' => "Lakkalikööri",
                'supplier_id' => 23,
                'category_id' => 1,
                'unit' => "500 ml",
                'price' => 18.00
            ],
            [
                'product_name' => "Original Frankfurter grüne Soße",
                'supplier_id' => 12,
                'category_id' => 2,
                'unit' => "12 boxes",
                'price' => 13.00
            ],
        ];

        // Agregar created_at y updated_at a cada producto
        $products = array_map(function ($product) use ($now) {
            return array_merge($product, [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }, $products);

        DB::table('products')->insert($products);
    }
}
