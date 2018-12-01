<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UploadsController extends Controller
{

    public function upload(Request $request)
    {
        $file     = $request->file('image');
        $filename = time() . $file->getClientOriginalName();
        $filePath = '14cT7z6WlCo1-G6kIlhsy-8FpmaGOJlcE/' . $filename;
        Storage::cloud()->put($filePath, file_get_contents($file));

        return response()->json(['success' => 'You have successfully upload image.']);
    }
}
