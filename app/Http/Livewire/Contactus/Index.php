<?php

namespace App\Http\Livewire\Contactus;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.contactus.index')->layout('layouts.livewire-app');
    }
}
