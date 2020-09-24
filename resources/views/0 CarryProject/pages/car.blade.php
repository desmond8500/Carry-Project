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
                    @auth
                        <a class="btn btn-primary float-right mt-4" href="{{ route("carry.addCommande",['user_id'=>$user->id, 'car_id'=>$car->id, 'statut'=>'true']) }}">Commander</a>
                    @else
                        <div class="mt-4">
                            Connectez-vous pour pouvoir passer une commande <a class="btn btn-primary" href="{{ route('carry.login') }}" >Connexion</a>

                        </div>


                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
