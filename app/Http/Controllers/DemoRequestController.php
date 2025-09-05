<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use App\Mail\DemoRequestSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoRequestController extends Controller
{
    public function store(Request $request)
    {
        // honeypot
        if ($request->filled('website')) {
            return back()->with('status', 'demo-requested');
        }

        $data = $request->validate([
            'name'    => ['required','string','max:120'],
            'email'   => ['required','email','max:190'],
            'company' => ['required','string','max:190'],
            'phone'   => ['nullable','string','max:60'],
            'message' => ['nullable','string','max:2000'],
        ]);

        // معلومات مصدر الطلب
        $data['source_page'] = url()->previous();
        $data['utm_source'] = $request->get('utm_source');
        $data['utm_medium'] = $request->get('utm_medium');
        $data['utm_campaign'] = $request->get('utm_campaign');

        $demo = DemoRequest::create($data);

        // أرسل تنبيه للإيميل الخاص بالمبيعات
        $to = config('mail.sales_inbox', env('SALES_INBOX'));
        if ($to) {
            Mail::to($to)->send(new DemoRequestSubmitted($demo));
        }

        return back()->with('status', 'demo-requested')->withInput();
    }
}
