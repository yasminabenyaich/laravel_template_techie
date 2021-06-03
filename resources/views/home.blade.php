<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
</head>
<body>
    @extends('layouts.app')
        @section('content')
                
            {{-- mettre un include pour toutes les blade qu'on veut--}}
            @include('partials.navbar')
            @include('partials.hero')
            @include('partials.about')
            @include('partials.count')
            @include('partials.services')
            @include('partials.testimonals')
            @include('partials.contact')
            @include('partials.footer')
             {{-- LOADER --}}
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
                <i class="bi bi-arrow-up-short"></i>
            </a>
            <div id="preloader"></div>
        @endsection
</body>
</html>