<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'sort_order' => 1,
                'section_number' => '07',
                'question' => 'What services does NLT provide?',
                'answer' => 'NLT offers enterprise software solutions, custom web & mobile app development, system integration, and cloud-based services tailored to your business needs.',
            ],
            [
                'sort_order' => 2,
                'section_number' => '07',
                'question' => 'Do you offer customized solutions?',
                'answer' => 'Absolutely. Our team specializes in building fully customized software solutions designed to meet the unique requirements of your organization.',
            ],
            [
                'sort_order' => 3,
                'section_number' => '07',
                'question' => 'How does NLT ensure software quality?',
                'answer' => 'We follow international standards, agile methodologies, and rigorous testing processes to guarantee reliability, scalability, and performance.',
            ],
            [
                'sort_order' => 4,
                'section_number' => '07',
                'question' => 'Do you provide support and maintenance?',
                'answer' => 'Yes, we offer continuous support, maintenance, and system updates to ensure your solutions remain efficient and up to date.',
            ],
            [
                'sort_order' => 5,
                'section_number' => '07',
                'question' => 'How can I get started with NLT?',
                'answer' => 'You can contact us through our website or email to schedule a free consultation. We’ll discuss your requirements and propose the best solution for your business.',
            ],
        ];

        foreach ($data as $item) {
            Faq::updateOrCreate(
                ['question' => $item['question']],
                $item + ['is_active' => true]
            );
        }
    }
}
