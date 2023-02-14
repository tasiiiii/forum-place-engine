<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        private readonly string $hash
    )
    {}

    public function envelope(): Envelope
    {
        $applicationName = Config::get('app.name');

        return new Envelope(
            subject: sprintf('Восстановление пароля | %s', $applicationName),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.password-reset',
            with: [
                'hash' => $this->hash,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
