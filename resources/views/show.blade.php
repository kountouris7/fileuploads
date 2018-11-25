@extends('layouts.app')
@section('content')
    @foreach($contents as $content)
        <div class="container">

            <ul>
            {{$content['name']}}
            </ul>
           {{-- <show-component :content="{{$content['name']}}"></show-component>--}}
        </div>

    @endforeach

    @endsection