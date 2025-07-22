<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $customers = DB::table('customers')->pluck('customer_id')->toArray();
        $employees = DB::table('employees')->pluck('employee_id')->toArray();
        $shippers = DB::table('shippers')->pluck('shipper_id')->toArray();

        foreach (range(1, 200) as $i) {
            Order::factory()->create([
                'customer_id' => Arr::random($customers),
                'employee_id' => Arr::random($employees),
                'shipper_id'  => Arr::random($shippers),
            ]);
        }
    }
}
