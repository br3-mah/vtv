<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Custom\SportAPI;

class Sports extends Component
{
    public function render()
    {
        $data = SportAPI::getAllSoccer();
        return view('livewire.sports', ['data' => $data]);
    }
}
