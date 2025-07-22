<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 🔹 Tablas independientes (sin claves foráneas)
        $this->call([
            CustomerSeeder::class,
            EmployeeSeeder::class,
            CategorySeeder::class,
            SupplierSeeder::class,
            ShipperSeeder::class,
        ]);

        // 🔹 Productos (dependen de category_id y supplier_id)
        $this->call(ProductSeeder::class);

        // 🔹 Órdenes (requieren customers, employees, shippers)
        $this->call(OrderSeeder::class);

        // 🔹 Detalles de órdenes (requieren orders y products)
        $this->call(OrderDetailSeeder::class);
    }
}
