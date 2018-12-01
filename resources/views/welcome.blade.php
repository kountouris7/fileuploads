<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @include('layouts.welcomeStyles')
</head>
<body>

<div id="app">

    <upload-component></upload-component>

    <a href="{{route('showFile')}}">Show Uploaded Files</a>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
