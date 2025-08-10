<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    //use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Feedback Mail',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         markdown: 'emails.feedback',
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    // public function attachments(): array
    // {
    //     return [];
    // }



    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $email = $this->subject('New Feedback Submission')
            ->markdown('emails.feedback')
            ->with('data', $this->data);

        // Attach anonymous file if uploaded and valid
        if (!empty($this->data['anonymous_file']) && $this->data['anonymous_file']->isValid()) {
            $email->attach($this->data['anonymous_file']->getRealPath(), [
                'as' => $this->data['anonymous_file']->getClientOriginalName(),
            ]);
        }

        // Attach recognized file if uploaded and valid
        if (!empty($this->data['recognized_file']) && $this->data['recognized_file']->isValid()) {
            $email->attach($this->data['recognized_file']->getRealPath(), [
                'as' => $this->data['recognized_file']->getClientOriginalName(),
            ]);
        }

        return $email;
    }
}
