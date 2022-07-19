<?php

namespace App\Http\Livewire\Complaint;

use Livewire\Component;
use App\Mail\SampleMail;
use App\Models\Complaint;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public Complaint $complaint;

    public function mount(){
        $this->complaint = new complaint();
    }

    protected $rules = [
        'complaint.name' => 'required',
        'complaint.email' => 'required|email',
        'complaint.city' => 'required',
        'complaint.country' => 'required',
        'complaint.type' => 'required',
        'complaint.subject' => 'required',
        'complaint.address' => 'required',
        'complaint.Description' => 'required',
        'complaint.tradingAccountNumber' => 'required',
        'complaint.postalCode' => 'required',
        'complaint.disputedAmount' => 'nullable',
        'complaint.tel' => 'required',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function CreateComplaint()
    {
        $this->validate();
        
        Mail::to('admin@gmail.com')->send(new SampleMail($this->complaint));
        
        $this->complaint->save();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.complaint.index')->layout('layouts.livewire-app');
    }
}
