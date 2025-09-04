<?php

namespace Database\Seeders;

use App\Models\ChooseItem;
use Illuminate\Database\Seeder;

class ChooseItemSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // الصف العلوي (3 بطاقات)
            [
                'row' => 'top',
                'sort_order' => 1,
                'section_number' => '03',
                'title' => 'Smooth Operations',
                'description' => 'Workbench ERP allows businesses to operate reliably without depending on a single person—scalable, repeatable processes that keep productivity high even when leadership steps away.',
                'icon_path' => null,
                'icon_alt' => null,
            ],
            [
                'row' => 'top',
                'sort_order' => 2,
                'section_number' => '03',
                'title' => 'Automation & Productivity',
                'description' => "Our ERP system not only automates tasks, it also enhances productivity, drives business growth by offering analytics for informed decision-making, ensuring regulatory compliance and product traceability, and improving customer satisfaction through effective management of orders, preferences, feedback and so on.",
                'icon_path' => null,
                'icon_alt' => null,
            ],
            [
                'row' => 'top',
                'sort_order' => 3,
                'section_number' => '03',
                'title' => 'Compliance & Traceability',
                'description' => 'Having a comprehensive system that increases your efficiency, cuts through red tape, boosts profitability, and positions your business for faster growth while enhancing its market value.',
                'icon_path' => null,
                'icon_alt' => null,
            ],

            // الصف السفلي (2 بطاقة)
            [
                'row' => 'bottom',
                'sort_order' => 1,
                'section_number' => '03',
                'title' => 'Efficiency & Growth',
                'description' => 'A comprehensive system that increases efficiency, cuts through red tape, and boosts profitability—positioning you for faster, sustainable growth.',
                'icon_path' => null,
                'icon_alt' => null,
            ],
            [
                'row' => 'bottom',
                'sort_order' => 2,
                'section_number' => '03',
                'title' => 'Increased Market Value',
                'description' => 'Stronger profitability and repeatable processes elevate your brand and increase your business’s market value over time.',
                'icon_path' => null,
                'icon_alt' => null,
            ],
        ];

        foreach ($data as $item) {
            ChooseItem::updateOrCreate(
                ['title' => $item['title']],
                $item + ['is_active' => true]
            );
        }
    }
}
