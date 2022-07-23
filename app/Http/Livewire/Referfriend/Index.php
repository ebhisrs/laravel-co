<?php

namespace App\Http\Livewire\Referfriend;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.referfriend.index')->layout('layouts.livewire-app');
    }
}
