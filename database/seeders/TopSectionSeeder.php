<?php

namespace Database\Seeders;

use App\Models\TopSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TopSection::create([
            'title_desktop' => 'Enterprise Solutions, Simplified',
            'title_mobile' => 'Enterprise Solutions, Simplified & Customer Success',
            'description' => 'Insights and strategies to simplify technology and empower your business growth.',
            'btn_primary_label' => 'Discover Our Solutions',
            'btn_primary_link' => '#features',
            'btn_secondary_label' => 'About NLT',
            'btn_secondary_link' => '#about',
            'image_1' => 'images/custom/screen-phone-2.png',
            'image_2' => 'images/system-screens/screen-home.png',
            'image_3' => 'images/custom/screen-phone-3.png',
        ]);
    }
}
