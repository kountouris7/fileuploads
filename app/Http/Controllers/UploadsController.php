<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadsController extends Controller
{
    public function uploads(Request $request)
    {
        // cache the file
        $file = $request->file('photo');
        // generate a new filename. getClientOriginalExtension() for the file extension
        $filename = $file->getClientOriginalName() . time() . '.' . $file->getClientOriginalExtension();
        // save to storage/app/photos as the new $filename
       // $path = $file->storeAs('photos', $filename);
        Storage::cloud()->put('Hello World' , $filename);
        // Storage::disk('google')->put('Hello World' , $filename);
        return 'File was saved to Google Drive';

       // return redirect(route('show'));
    }

    public function show()
    {
        $contents = Storage::get('photos');
        dd($contents);
        return view('show' , compact('contents'));
    }
}
