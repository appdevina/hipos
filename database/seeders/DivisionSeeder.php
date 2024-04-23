<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_divisions')->insert([
            'name' => 'Admin',
        ],
        [
            'name' => 'Finance',
        ],
        [
            'name' => 'Sales',
        ],
        [
            'name' => 'Supply Chain',
        ],
        [
            'name' => 'Warehouse',
        ],
    );
    }
}
