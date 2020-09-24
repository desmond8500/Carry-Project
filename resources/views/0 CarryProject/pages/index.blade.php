@extends('0 CarryProject.layout')

@section('content')
    <div class="row mt-4">
        @if ($user)
            <div class="col-md-12">
                <h3>Bonjour {{ $user->prenom }} </h3>
            </div>
        @endif
        <div class="col-md-4">
            <x-carry.hire />
        </div>
        <div class="col-md-8">
            @foreach ($cars as $car)
                <x-carry.cars :car="$car"/>
            @endforeach
        </div>
    </div>
@endsection
