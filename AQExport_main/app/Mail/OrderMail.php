<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    public $sub;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData,$sub)
    {
        $this->mailData = $mailData;
        $this->sub = $sub;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->sub)
                    ->view('emails.order');
    }
}
