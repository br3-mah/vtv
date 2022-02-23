<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Custom\TvSerieAPI;

class TvSeriesComponent extends Component
{
    public function render()
    {
        $data = TvSerieAPI::getAllSeries();
        return view('livewire.tv-series-component', ['data' => $data->results]);
    }
}
