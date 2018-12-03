@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="">
            <h4>Click to view files in browser</h4>
        </div>
        @foreach($contents as $cont => $content)
            <show-component :content="{{json_encode($content)}}"
                            :cloud-Folder-Link="{{json_encode($cloudFolderLink)}}"></show-component>
            <strong><a href="{{'https://drive.google.com/open?id=' . $content['basename']}}">View file in Google Drive Folder</a></strong>
            <hr>
        @endforeach
        <br>
        {{--<h4><a href="{{$cloudFolderLink}}">View files in Google Drive Folder</a></h4>--}}
    </div>


@endsection
