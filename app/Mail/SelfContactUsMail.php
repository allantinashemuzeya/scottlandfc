<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SelfContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $newmessage;
    public $phone;
    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $newmessage, $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->newmessage = $newmessage;
        $this->phone = $phone;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Hervé Lewis Online Studio | New message',
            tags: ['Hervé Lewis Online Studio'],

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mail.SelfContactUs',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'newmessage' => $this->newmessage,
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
