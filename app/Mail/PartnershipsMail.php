<?php

namespace App\Mail;

use App\Models\Partnerships;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PartnershipsMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $partnerships;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Partnerships $partnerships)
    {
        $this->partnerships = $partnerships;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('FXDDMENA@gmail.com')->view('mail.partnerships-mail')->subject('New Partnerships')->with([
            'partnershipsFirstName' => $this->partnerships->firstName,
            'partnershipsLastName' => $this->partnerships->lastName,
            'partnershipsEmail' => $this->partnerships->email,
            'partnershipsPhoneNumber' => $this->partnerships->phoneNumber,
            'partnershipsPreferredContactMethod' => $this->partnerships->preferredContactMethod,
            'partnershipsDescription' => $this->partnerships->description
        ]);
    }
}
