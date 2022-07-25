<?php

namespace App\Http\Livewire\Webinar;

use App\Models\Webinar;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $webinars = Webinar::all() ;
        return view('livewire.webinar.index',compact('webinars'))->layout('layouts.livewire-app');
    }
}
