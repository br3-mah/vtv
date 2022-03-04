<?php
namespace App\Custom;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

use Streaming\FFMpeg;

class Magstreamer {
 

    public static function Config(){
        $config = [
            'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
            'ffprobe.binaries' => '/usr/bin/ffprobe',
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFmpeg should use
        ];
        
        $log = new Logger('FFmpeg_Streaming');
        $log->pushHandler(new StreamHandler('/var/log/ffmpeg-streaming.log')); // path to log file
            
        $ffmpeg = FFMpeg::create($config, $log);
    }


}