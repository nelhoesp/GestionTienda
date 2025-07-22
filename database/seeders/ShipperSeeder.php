<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shippers')->insert([
            [
                'shipper_name' => 'Speedy Express',
                'phone' => '(503) 555-9831',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'shipper_name' => 'United Package',
                'phone' => '(503) 555-3199',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'shipper_name' => 'Federal Shipping',
                'phone' => '(503) 555-9931',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
