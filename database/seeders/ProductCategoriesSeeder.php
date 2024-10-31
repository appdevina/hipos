<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_product_categories')->insert([
            [
                'name' => 'Food',
            ],
            [
                'name' => 'Beverages',
            ],
            [
                'name' => 'Candy',
            ],
            [
                'name' => 'Chocolate',
            ],
            [
                'name' => 'Herbs',
            ],
        ]);
    }
}
