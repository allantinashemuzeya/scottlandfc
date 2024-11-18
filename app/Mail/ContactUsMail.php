<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;
    public $phone;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $message, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
        $this->phone = $phone;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Get In Touch Email - Hervé Lewis Online Studio',
            tags: ['Hervé Lewis Online Studio'],

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mail.ContactUs',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'message' => $this->message,
                'phone' => $this->phone,
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
