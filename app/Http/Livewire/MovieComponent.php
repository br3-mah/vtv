<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Multimedia;

class MovieComponent extends Component
{
    public function render()
    {
        $data = Multimedia::get();
        // dd($data->cover_image);
        // die(print_r($data, true));
        return view('livewire.movie-component', ['data' => $data]);
    }
}
