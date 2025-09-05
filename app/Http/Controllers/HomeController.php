<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Faq;
use App\Models\ChooseItem;
use App\Models\Partner;
use App\Models\Testimonial;
use App\Models\TopSection;

class HomeController extends Controller
{
    public function index()
    {
        $features = Feature::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $faqs = Faq::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $chooseItemsTop = ChooseItem::where('is_active', true)
            ->where('row', 'top')
            ->orderBy('sort_order')
            ->get();

        $chooseItemsBottom = ChooseItem::where('is_active', true)
            ->where('row', 'bottom')
            ->orderBy('sort_order')
            ->get();
        $testimonialsGrouped = Testimonial::where('is_active', true)
            ->orderBy('testimonial_date', 'desc')
            ->get()
            ->groupBy('group_class');

        $topSection = TopSection::first();
        $featureSection = \App\Models\FeatureSection::first();
        $partners = Partner::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
        return view('home', compact(
            'features',
            'featureSection',
            'faqs',
            'chooseItemsTop',
            'chooseItemsBottom',
            'testimonialsGrouped',
            'topSection',
            'partners',
        ));
    }
}
