<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $defaultImage = 'images/Testimonial-Author-Image-01.webp';

        $items = [
            [
                'author_name' => 'Albert Flores',
                'author_email' => 'michelle.rivera@example.com',
                'author_image' => $defaultImage,
                'content' => 'Gridify streamlined our outreach process overnight. We cut manual work in half and doubled our qualified leads.',
                'testimonial_date' => '2025-02-15',
                'group_class' => '_1',
            ],
            [
                'author_name' => 'Ralph Edwards',
                'author_email' => 'kenzi.lawson@example.com',
                'author_image' => $defaultImage,
                'content' => 'We saved over 15 hours weekly thanks to Gridify’s automation and CRM integrations. Total game changer for small teams.',
                'testimonial_date' => '2014-02-11',
                'group_class' => '_1',
            ],
            [
                'author_name' => 'Theresa Webb',
                'author_email' => 'debra.holt@example.com',
                'author_image' => $defaultImage,
                'content' => 'From onboarding to daily use, it is intuitive and efficient. Our sales team loves it.',
                'testimonial_date' => '2015-02-09',
                'group_class' => '_2',
            ],
            [
                'author_name' => 'Jenny Wilson',
                'author_email' => 'jessica.hanson@example.com',
                'author_image' => $defaultImage,
                'content' => 'Switching to Gridify was seamless. The UX is smooth, the tools are powerful, and results came fast.',
                'testimonial_date' => '2015-02-13',
                'group_class' => '_2',
            ],
            [
                'author_name' => 'Brooklyn Simmons',
                'author_email' => 'tanya.hill@example.com',
                'author_image' => $defaultImage,
                'content' => 'We saved over 15 hours weekly thanks to Gridify’s automation and CRM integrations. Total game changer.',
                'testimonial_date' => '2015-05-31',
                'group_class' => '_3',
            ],
            [
                'author_name' => 'Cody Fisher',
                'author_email' => 'bill.sanders@example.com',
                'author_image' => $defaultImage,
                'content' => 'Our onboarding time went from weeks to hours. Gridify’s simplicity and support made all the difference.',
                'testimonial_date' => '2015-07-14',
                'group_class' => '_3',
            ],
        ];

        foreach ($items as $item) {
            Testimonial::create($item + ['is_active' => true]);
        }
    }
}
