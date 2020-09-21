@php
    use App\Http\Controllers\BackofficeController;
    $page = new BackofficeController();
@endphp
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Backoffice</title>
</head>
<body>

    @include('1 Backoffice.index.nav')

    @yield('content')

    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
