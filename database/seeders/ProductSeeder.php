<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_products')->insert([
            [
                'name' => 'Coca Cola 500ml',
                'product_code' => '241101001',
                'brand_id' => 1,
                'product_category_id' => 2,
                'unit_id' => 1,
                'price' => 10000,
                'stock' => 25,
            ],
            [
                'name' => 'Nestle Purelife 500ml',
                'product_code' => '241101002',
                'brand_id' => 3,
                'product_category_id' => 2,
                'unit_id' => 1,
                'price' => 8000,
                'stock' => 20,
            ],
            [
                'name' => 'Nongshim Udon Shrimp',
                'product_code' => '241101003',
                'brand_id' => 2,
                'product_category_id' => 1,
                'unit_id' => 1,
                'price' => 15000,
                'stock' => 20,
            ],
        ]);
    }
}
