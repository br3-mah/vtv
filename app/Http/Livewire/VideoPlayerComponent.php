<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VideoPlayerComponent extends Component
{
    public $path;

    public function mount($movie)
    {
        $this->path = $movie;
        return view('livewire.video-player-component');
    }
    // public function render($movie)
    // {
    //     return view('livewire.video-player-component');
    // }
}
