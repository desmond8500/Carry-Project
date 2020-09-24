<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carry.css') }}">
    <title>Carry Project</title>
</head>
<body>
    @php
        $menus = json_decode('
             [
                 { "name": "Commandes", "route": "devnotes" , "access": "0"},
                 { "name": "Clients", "route": "devnotes" , "access": "2"},
                 { "name": "Véhicules", "route": "carry.carList" , "access": "2"}
             ]
        ');
    @endphp
    <x-carry.layout.navbar :menus="$menus" />

    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('devnotes')}}" class="text-dark">Notes</a>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
