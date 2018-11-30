@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
        <div class="container">
         {{$content}}
        </div>

    @endforeach

    @endsection