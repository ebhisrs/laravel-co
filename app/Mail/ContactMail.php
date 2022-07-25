<?php

namespace App\Mail;

use App\Models\Contactus;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $contactus;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contactus $contactus)
    {
        $this->contactus = $contactus;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('FXDDMENA@gmail.com')->view('mail.contactus-mail')->subject('contact us')->with([
            'contactusFirstName' => $this->contactus->firstName,
            'contactusLastName' => $this->contactus->lastName,
            'contactusEmail' => $this->contactus->email,
            'contactusInquiryDetails' => $this->contactus->inquiryDetails
        ]);
    }
}
