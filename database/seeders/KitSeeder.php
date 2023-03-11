<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Models\kit;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kits')->insert([
            'name' => 'StartedKit'
        ]);

        DB::table('kits')->insert([
            'name' => 'Educational Robotics Kit'
        ]);

        DB::table('kits')->insert([
            'name' => 'Kit5'
        ]);
    }
}
