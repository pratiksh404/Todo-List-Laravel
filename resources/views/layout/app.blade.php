<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name','Doctype To-Do list')}}</title>
     {{-- tab logo --}}
    <link rel="icon" href="/storage/site_images/doctypelogo.png">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>
</head>
<body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.message')
            @yield('content')
        </div>
        <footer class="text-center">
            &copy;Copyright to <a href="http://drh2so4.ga/">DR.H2SO4</a>
        </footer>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</body>
</html>