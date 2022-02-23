<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Custom\MusicAPI;

class MusicComponent extends Component
{
    public function render()
    {
        $data = MusicAPI::getAllMusic();
        return view('livewire.music-component', ['data' => $data]);
    }
}
