<?php

namespace App\Mail;

use App\Model\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->contact->email,$this->contact->fullname)->subject($this->contact->body)->view('emails.contact');
    }
}
