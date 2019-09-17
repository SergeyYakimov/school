<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FirstLessonMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $name, $surname, $email, $phone, $city;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $surname, $email, $phone, $city)
    {
        $this->name = $name;
        $this->surname = $surname; 
        $this->email = $email; 
        $this->phone = $phone; 
        $this->city = $city;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('lesson_mail');
    }
}
