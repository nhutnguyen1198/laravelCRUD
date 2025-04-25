<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            OrderDetail::factory()->create([
                'order_id' => rand(1, 10),
                'product_id' => rand(1, 10),
            ]);
        }
    }
}
