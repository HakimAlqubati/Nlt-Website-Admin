<?php

namespace Database\Seeders;

use App\Models\Integration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IntegrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Integration::insert([
        [
            'title' => 'Circle 1',
            'image_path_1' => 'images/custom/AI-logo.svg',
            'image_path_2' => 'images/custom/Android.svg',
            'circle_position' => '_1',
            'sort_order' => 1,
            'is_active' => true,
        ],
        [
            'title' => 'Circle 2',
            'image_path_1' => 'images/custom/Google.svg',
            'image_path_2' => 'images/custom/AWS.svg',
            'circle_position' => '_2',
            'sort_order' => 2,
            'is_active' => true,
        ],
    ]);
    }
}
