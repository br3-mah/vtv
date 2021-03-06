<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use App\Models\Multimedia; 
use App\Traits\StoreImageTrait; 

class FileUploadController extends Controller {
    use StoreImageTrait;
    /**
     * @return Application|Factory|View
     */
    public function index() {
        return view('pages.upload-file.index');
    }

    public function uploadLargeFiles(Request $request) {
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));

        if (!$receiver->isUploaded()) {
            // file not uploaded
        }

        $fileReceived = $receiver->receive(); // receive file
        if ($fileReceived->isFinished()) { // file uploading is complete / all chunks are uploaded
            $file = $fileReceived->getFile(); // get file
            $extension = $file->getClientOriginalExtension();
            $fileName = str_replace('.'.$extension, '', $file->getClientOriginalName()); //file name without extenstion
            $fileName .= '_' . md5(time()) . '.' . $extension; // a unique file name

            $disk = Storage::disk(config('filesystems.default'));

            // dd($disk);
            $path = $disk->putFileAs('videos', $file, $fileName);

            // delete chunked file
            unlink($file->getPathname());
            return [
                'path' => asset('storage/' . $path),
                'filename' => $fileName
            ];
        }

        // otherwise return percentage informatoin
        $handler = $fileReceived->handler();
        return [
            'done' => $handler->getPercentageDone(),
            'status' => true
        ];
    }

    public function store(Request $request)
    { 

        $request->validate([
            'cover_image' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
            'caption_title' => 'required',
            'sub_headline' => 'required',
            'media_type' => 'required',
            'media_path' => 'required',
            'background_desc' => 'required',
            'price' => 'required'
        ]);

        $data = $request->all();
        $data['cover_image'] = $this->verifyAndStoreImage($request, 'cover_image', 'covers');
   
        
        // Multimedia::create($data);
        // return response($data, 200);

        Multimedia::create($data);
        return json_encode(array(
            "statusCode"=>200
        ));

    }
}
