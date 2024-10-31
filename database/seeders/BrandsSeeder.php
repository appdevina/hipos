<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_brands')->insert([
            [
                'name' => 'Coca-Cola',
            ],
            [
                'name' => 'Nongshim',
            ],
            [
                'name' => 'Nestle',
            ],
            [
                'name' => 'Delfi',
            ],
            [
                'name' => 'Herbalife',
            ],
        ]);
    }
}
