<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Carry Project</title>
</head>
<body>
    @php
        $menus = json_decode('
             [
                 { "name": "Acceuil", "route": "carry.index" },
                 { "name": "Notes", "route": "devnotes" }
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


 <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: darkgrey;
  color: white;
}
</style>

