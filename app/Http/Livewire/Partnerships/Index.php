<?php

namespace App\Http\Livewire\Partnerships;

use Livewire\Component;
use App\Models\Partnerships;
use App\Mail\PartnershipsMail;
use Illuminate\Support\Facades\Mail;

class Index extends Component
{
    public Partnerships $partnerships;

    public function mount(){
        $this->partnerships = new Partnerships();
    }

    protected $rules = [
        'partnerships.firstName' => 'required',
        'partnerships.lastName' => 'required',
        'partnerships.email' => 'required|email',
        'partnerships.phoneNumber' => 'required',
        'partnerships.preferredContactMethod' => 'required',
        'partnerships.description' => 'required',
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function CreatePartnership()
    {
        $this->validate();
        
        Mail::to('admin@gmail.com')->send(new PartnershipsMail($this->partnerships));

        $this->partnerships->save();

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.partnerships.index')->layout('layouts.livewire-app');
    }
}
