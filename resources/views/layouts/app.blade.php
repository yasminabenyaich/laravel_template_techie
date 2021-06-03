<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset("css/app.css") }}>
    <title>Template</title>
</head>
<body>
    @include('partials.nav')
    <section class="container my-5">
        @yield('content')
    </section>

    {{-- Mettre les links --}}


    <script src={{ asset("js/app.js") }}></script>
</body>
</html>