<?php

namespace App\Email;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PangmoedEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'))
                    ->view('balasan')
                    ->subject($this->data['judul']);
    }
}