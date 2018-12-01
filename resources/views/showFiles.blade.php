@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card-header">
            <h3>Click to view files in browser</h3>

            @foreach($contents as $cont => $content)
                <div>
                    <a href="{{route('shareFile' , [$content['name']])}}">{{$content['name']}}</a>
                </div>
            @endforeach
        </div>
        <br>
        <h4><a href="{{$cloudFolderLink}}">View files in Google Drive Folder</a></h4>
    </div>
@endsection