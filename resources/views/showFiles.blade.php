@extends('layouts.app')
@section('content')
    @foreach($contents as $cont => $content)
        <div class="container">
            <a href="{{$cloudFolderLink}}">{{$content['name']}}</a>
        </div>
    @endforeach
@endsection