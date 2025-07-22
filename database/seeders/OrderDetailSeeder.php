<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productIds = DB::table('products')->pluck('product_id')->toArray(); // Extraemos una sola vez

        foreach (DB::table('orders')->pluck('order_id') as $orderId) {
            $selectedProducts = collect($productIds)->shuffle()->take(rand(1, 5));

            foreach ($selectedProducts as $productId) {
                OrderDetail::factory()->create([
                    'order_id'   => $orderId,
                    'product_id' => $productId,
                ]);
            }
        }
    }
}
