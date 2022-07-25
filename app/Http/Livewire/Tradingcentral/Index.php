<?php

namespace App\Http\Livewire\Tradingcentral;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.tradingcentral.index')->layout('layouts.livewire-app');
    }
}
