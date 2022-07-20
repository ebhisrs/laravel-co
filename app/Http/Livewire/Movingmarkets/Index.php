<?php

namespace App\Http\Livewire\Movingmarkets;

use Livewire\Component;

class Index extends Component
{
    public $url = "https://assets.ctfassets.net/l6zxjz2hffuo/6pgKcmXaHU0KTORZpE4vx4/1172b9c4a3e86c2ed33a5a31107f71ac/What_Moving_Markets-_Reflation__Deflation_or_Stagflation.pdf";

    public function changeUrl($url){
        $this->url = $url;
    }

    public function render()
    {
        return view('livewire.movingmarkets.index')->layout('layouts.livewire-app');
    }
}
