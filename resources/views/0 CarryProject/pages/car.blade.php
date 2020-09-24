@extends('0 CarryProject.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-8 card card-body">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid" src="{{ asset("storage/$car->photo") }}" alt="{{ $car->photo }}" >
                </div>
                <div class="col-md-8">
                    <h3>{{ $car->name }}</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <b>Volume :</b> <span class="float-right">{{ $car->volume }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Prix :</b> <span class="float-right">{{ $car->prix }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Description :</b> <span class="float-right">{{ $car->description }}</span>
                        </li>
                    </ul>
                    <a class="btn btn-primary float-right mt-4" href="">Commander</a>
                </div>
            </div>


        </div>
    </div>


@endsection
