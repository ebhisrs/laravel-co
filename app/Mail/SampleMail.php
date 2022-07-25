<?php

namespace App\Mail;

use App\Models\Complaint;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SampleMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $complaint;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Complaint $complaint)
    {
        $this->complaint = $complaint;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('FXDDMENA@gmail.com')->view('mail.complaint-mail')->subject(' New Complaint')->with([
            'complaintName' => $this->complaint->name,
            'complaintEmail' => $this->complaint->email,
            'complaintCity' => $this->complaint->city,
            'complaintCountry' => $this->complaint->country,
            'complaintType' => $this->complaint->type,
            'complaintSubject' => $this->complaint->subject,
            'complaintAddress' => $this->complaint->address,
            'complaintDescription' => $this->complaint->Description,
            'complaintTradingAccountNumber' => $this->complaint->tradingAccountNumber,
            'complaintPostalCode' => $this->complaint->postalCode,
            'complaintDisputedAmount' => $this->complaint->disputedAmount,
            'complaintTel' => $this->complaint->tel,
            
        ]);
    }
}
