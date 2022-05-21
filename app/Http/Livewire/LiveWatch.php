<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Monolog\Handler\StreamHandler;
use Streaming\FFMpeg;
use Monolog\Logger;

class LiveWatch extends Component
{
    public function render()
    {
        return view('livewire.live-watch');
    }
    // public function render()
    // {
    //     $config = [
    //         'ffmpeg.binaries'  => exec('which ffmpeg'),
    //         'ffprobe.binaries' => exec('which ffprobe'),
    //         'timeout'          => 3600, // The timeout for the underlying process
    //         'ffmpeg.threads'   => 12,   // The number of threads that FFmpeg should use
    //     ];
        
    //     $log = new Logger('FFmpeg_Streaming');
    //     $log->pushHandler(new StreamHandler('/var/log/ffmpeg-streaming.log')); // path to log file
            
    //     $ffmpeg = FFMpeg::create($config, $log);
    //     $video = $ffmpeg->open('watch/movies/trailer.mp4');

    //     dd($video);
    //     return view('livewire.live-watch', ['video' => $video]);
    // }
}
