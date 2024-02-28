<?php

namespace Database\Seeders;

use Dflydev\DotAccessData\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data fake 10 Product
        \App\Models\Product::factory()->count(10)->create();
    }
}
