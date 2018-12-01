<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RetrieveCloudController extends Controller
{
    public function showFiles(Request $request)
    {
          $contents = Storage::cloud()->listContents('14cT7z6WlCo1-G6kIlhsy-8FpmaGOJlcE');
          $cloudFolderLink = Storage::cloud()->url('14cT7z6WlCo1-G6kIlhsy-8FpmaGOJlcE');

        return view('showFiles', compact('contents' ,'cloudFolderLink'));
    }
}
