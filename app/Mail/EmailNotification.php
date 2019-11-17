<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@mosaconnect.org', 'Administrator')
        ->subject('Pesan dari MosaConnect')
        ->markdown(mails.name)
        ->with([
            'name' => 'Fikri Abdul',
            'link' => 'http://mosaconnect.org'
        ]);
    }
}
