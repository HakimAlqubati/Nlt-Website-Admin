<?php

namespace App\Mail;

use App\Models\DemoRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public DemoRequest $demo) {}

    public function build()
    {
        return $this->subject('New Demo Request - '.$this->demo->company)
            ->markdown('emails.demo-request', [
                'demo' => $this->demo,
            ]);
    }
}
