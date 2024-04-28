<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $name;
    public $email;
    public $subject;
    public $mobile;
    public $contactMessage ;




    public function __construct($name, $email, $subject, $mobile, $contactMessage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->mobile = $mobile;
        $this->contactMessage  = $contactMessage;

        // dd($message);
        // contactMessage
        // problem face $message data not passing in the contact.blade view
        // because laravel use message same veriable as a reserve keyword
        // solution
        // message change to contactMessage then pass it contact.blade file 
        // and its works 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Form Mail')
                    ->view('email.contact');
    }
}
