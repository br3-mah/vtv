<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Custom\MovieAPI;

class VideoManager extends Component
{

    protected $data;

    public function mount()
    {
        
        
    }

    public function render()
    {
        $data = MovieAPI::getAllSoccer();
        
        // foreach ($data as $key => $value) {
        //     dd($value);
        // }
        return view('livewire.video-manager', ['data' => $data]);
    }
}
