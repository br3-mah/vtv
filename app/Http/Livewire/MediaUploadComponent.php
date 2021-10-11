<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Multimedia; 

class MediaUploadComponent extends Component
{
    use WithFileUploads;

    public $isPopped;
    public $caption_title, $sub_headline, $media_type, $background_desc, $media_file;
    protected $rules = [
        // 'cover_image' => 'required',
        'caption_title' => 'required',
        'sub_headline' => 'required',
        'media_type' => 'required',
        'background_desc' => 'required',
        'media_file' => 'required',
    ];

    public function mount()
    {
        $this->isPopped = false;
    }
    public function render()
    {
        return view('livewire.media-upload-component');
    }

    public function toggleModal()
    {
        $this->isPopped = !$this->isPopped;
    }

    public function uploadMedia(){
        $validatedData = $this->validate();
        dd($validatedData);
        $this->media_file->storeAs('media_file', 'media');
        $data = Multimedia::firstOrCreate($validatedData);
        dd($data);
        session()->flash('message', 'Media successfully uploaded.');
    }
}
