<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $course_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $course_name)
    {
        $this->name = $name;
        $this->course_name = $course_name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.register');
    }
}
