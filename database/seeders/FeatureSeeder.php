<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'sort_order' => 1,
                'section_number' => '01',
                'title' => 'HR Management System',
                'description' => 'A complete solution for managing employees: attendance and leave tracking, payroll, performance reviews, and staff records — all in one smart dashboard.',
                'image_path' => 'images/system-screens/HR.png',
                'image_alt' => 'HR System Screen',
            ],
            [
                'sort_order' => 2,
                'section_number' => '02',
                'title' => 'Tasks Management System',
                'description' => 'Easily organize and monitor daily tasks with clear priorities, deadlines, and real-time progress tracking.',
                'image_path' => 'images/system-screens/Tasks.png',
                'image_alt' => 'Tasks System Screen',
            ],
            [
                'sort_order' => 3,
                'section_number' => '03',
                'title' => 'Stock Management System',
                'description' => 'Gain full control of your inventory: track stock levels, monitor supply and consumption, and receive smart alerts when items run low.',
                'image_path' => 'images/system-screens/inventory.png',
                'image_alt' => 'Inventory System Screen',
            ],
            [
                'sort_order' => 4,
                'section_number' => '04',
                'title' => 'Maintenance Management System',
                'description' => 'Schedule and manage preventive and corrective maintenance for equipment and assets, with detailed records to ensure smooth operations.',
                'image_path' => 'images/system-screens/Maintenance.png',
                'image_alt' => 'Maintenance System Screen',
            ],
        ];

        foreach ($data as $item) {
            Feature::updateOrCreate(
                ['title' => $item['title']],
                $item + ['is_active' => true]
            );
        }
    }
}
