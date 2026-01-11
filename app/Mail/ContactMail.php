<?php

namespace App\Mail;

use App\Models\ContactMail as ModelsContactMail;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     */
    public function __construct(
        protected Setting $appSetting,
        protected ModelsContactMail $contactMail
    ) {}
    
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Form: ' . $this->contactMail->subject,
            replyTo: [$this->contactMail->email],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.mail',
            with: [
                'appSetting'    => $this->appSetting,
                'contactMail'   => $this->contactMail,
            ],
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
