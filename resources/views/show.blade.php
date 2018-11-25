@extends('layouts.app')
@section('content')
    @foreach($contents as $object)
        <div class="container">
            <ul>
            {{$object['name']}}
            </ul>
        </div>

    @endforeach

    @endsection