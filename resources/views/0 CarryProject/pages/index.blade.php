@extends('0 CarryProject.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-8">
            <x-carry.cars />
        </div>
        <div class="col-md-4">
            <x-carry.hire />
        </div>
    </div>
@endsection
