<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UploadsController extends Controller
{
    public function uploads(Request $request)
    {
        // cache the file
        $file = request('fileToUpload');
        //dd($file);
        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = $file->getClientOriginalName() . time() . '.' . $file->getClientOriginalExtension();
        //dd($filename);
        // save to storage/app/photos as the new $filename
        //$path = $file->storeAs('photos', $filename);
        Storage::cloud()->put($filename, 'HelloWorld');
        return redirect(route('show'));
    }

    public function show()
    {
        $contents = collect(Storage::cloud()->listContents('/', false));

        return view('show' , compact('contents'));
    }
}
