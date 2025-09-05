<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::insert([
            [
                'name' => 'Sultan',
                'logo_path' => 'images/partners-logo/sultan-logo.png',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Romansia',
                'logo_path' => 'images/partners-logo/romansia-logo.png',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Shafi',
                'logo_path' => 'images/partners-logo/shafi-logo.png',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ]);
    }
}
