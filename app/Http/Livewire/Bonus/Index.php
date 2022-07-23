<?php

namespace App\Http\Livewire\Bonus;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.bonus.index')->layout('layouts.livewire-app');
    }
}
