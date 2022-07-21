<?php

namespace App\Http\Livewire\Contactus;

use Livewire\Component;
use App\Mail\ContactMail;
use App\Models\Contactus;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{

    public Contactus $contactus;

    public function mount(){
        $this->contactus = new Contactus();
    }

    protected $rules = [
        'contactus.firstName' => 'required',
        'contactus.lastName' => 'required',
        'contactus.email' => 'required|email',
        'contactus.inquiryDetails' => 'required',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function CreateContactUs()
    {
        $this->validate();
        
        Mail::to('admin@gmail.com')->send(new ContactMail($this->contactus));

        $this->contactus->save();

        return redirect('/');
    }


    public function render()
    {
        return view('livewire.contactus.index')->layout('layouts.livewire-app');
    }
}
