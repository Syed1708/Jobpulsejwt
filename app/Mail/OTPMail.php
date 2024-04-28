<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

// to implement queue in this mail 
// .env file add smtp configuration i use mailtrip
// then same file add 
// # use this to database to apply queueable mail
// # QUEUE_CONNECTION=sync default
// QUEUE_CONNECTION=database
// then implements ShouldQueue below class
// before we run those command like php artisan queue:table
// then php artisan migrate
// lastly run this command in terminal php artisan queue:work
// with queue
// class OTPMail extends Mailable implements ShouldQueue
// another way just implemet this code in user controller like // Mail::to($email)->queue(new OTPMail($otp)); instead of sent use queue
// without queue
class OTPMail extends Mailable 
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $otp;

    public function __construct($otp)
    {
        //pass otp to available in blade view file
        $this->otp = $otp;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sent Otp Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            // markdown file
            // markdown: 'mail.sent-otp-mail',
            // return view file
            view: 'email.OTPMail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
