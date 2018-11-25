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
{{-- <form action="{{route('upload')}}" enctype="multipart/form-data" method="POST">
     <p>
         <label for="photo">
             <input type="file" name="image" id="image">
         </label>
     </p>
     <button>Upload</button>
     {{ csrf_field() }}
 </form>--}}

<div id="app">

    <example-component></example-component>

    <a href="{{route('show')}}">Show Uploaded Files</a>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
