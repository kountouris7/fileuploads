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

          return view('showFiles', compact('contents', 'cloudFolderLink'));
    }

    public function shareFile($filename)
    {
        // Get the file to find the ID
        $dir       = '14cT7z6WlCo1-G6kIlhsy-8FpmaGOJlcE';
        $recursive = false; // Get subdirectories also?
        $contents  = collect(Storage::cloud()->listContents($dir, $recursive));
        $file      = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first();

        // Change permissions
        // - https://developers.google.com/drive/v3/web/about-permissions
        // - https://developers.google.com/drive/v3/reference/permissions
        $service    = Storage::cloud()->getAdapter()->getService();
        $permission = new \Google_Service_Drive_Permission();
        $permission->setRole('reader');
        $permission->setType('anyone');
        $permission->setAllowFileDiscovery(false);
        $permissions = $service->permissions->create($file['basename'], $permission);

        return Storage::cloud()->read($file['path']);
    }
}
