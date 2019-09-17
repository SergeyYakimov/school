<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $phone)
    {
        $this->name = $name; 
        $this->email = $email; 
        $this->phone = $phone; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contact_mail');
    }
}
