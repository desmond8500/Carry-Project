<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/vuepress.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/code.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset("library/highlight/styles/atom-one-dark.css")}}"> --}}
    <title>DevNotes</title>
</head>
<body>

    <x-carry.layout.navbar />

    <div class="container">
        @yield('content')
    </div>



    <script src="{{ asset('js/app.js')}}"></script>
    {{-- <script src="{{ asset("library/highlight/highlight.pack.js") }}"></script> --}}
    {{-- <script>hljs.initHighlightingOnLoad();</script> --}}
</body>
</html>
