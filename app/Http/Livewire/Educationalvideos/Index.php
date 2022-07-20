<?php

namespace App\Http\Livewire\Educationalvideos;

use Livewire\Component;
use App\Models\Educationalvideos;

class Index extends Component
{
    public function render()
    {
        $videos = Educationalvideos::all();
        return view('livewire.educationalvideos.index',compact('videos'))->layout('layouts.livewire-app');
    }
}
