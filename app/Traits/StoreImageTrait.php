<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait StoreImageTrait
{

    public function verifyAndStoreImage(Request $request, $filename = 'image', $directory = 'unknown')
    {
        if ($request->hasFile($filename)) {
            if (!$request->file($filename)->isValid()) {
                flash('Invalid image')->error()->important();
                return redirect()->back()->withInput();
            }
            return $request->file($filename)->store('image/' . $directory, 'public');
        }
        return null;
    }
}