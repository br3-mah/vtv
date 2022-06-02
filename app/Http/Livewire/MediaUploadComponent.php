<?php

namespace App\Http\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Multimedia; 
use App\Custom\MovieAPI;

class MediaUploadComponent extends Component
{
    use WithFileUploads;

    public $isPopped;
    public $caption_title, $cover_image, $sub_headline, $media_type, $background_desc, $media_file;
    protected $rules = [
        // 'cover_image' => 'required',
        'caption_title' => 'required',
        'sub_headline' => 'required',
        'media_type' => 'required',
        'background_desc' => 'required',
        'media_file' => 'max:1000000|required|file|mimetypes:video/mp4,video/mpeg',
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
        try {
            $this->media_file->store();
            $data = Multimedia::firstOrCreate(
                [
                    'cover_image' => $this->cover_image,
                    'caption_title' => $this->caption_title,
                    'sub_headline' => $this->sub_headline,
                    'media_type' => $this->media_type,
                    'background_desc' => $this->background_desc,
                    'media_file' => $this->media_file,
                ]
            );
            dd($data);
            session()->flash('message', 'Media successfully uploaded.');
        } catch (\Throwable $th) {
            dd($th);
        }

        // $data = MovieAPI::getAllSoccer();
        // dd($data);
    }
}
