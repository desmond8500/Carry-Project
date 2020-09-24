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
                            <b>Prix :</b> <span class="float-right">{{ $car->prix ?? "15 000 CFA" }}</span>
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
        <div class="col-md-4">
            @if($user->id == $car->owner_id)
                <form action="{{ route('trajets.store') }}" method="post">
                    @csrf
                    <div class="card card-body">
                        <input type="text" name="car_id" value="{{ $car->id }}" hidden>
                        <div class="form-group">
                            <label for="">Départ</label>
                            <select name="debut" class="form-control">
                                @foreach ($lieux as $lieu)
                                    <option value="{{ $lieu->id }}">{{ $lieu->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Destination</label>
                            <select name="fin" class="form-control">
                                @foreach ($lieux as $lieu)
                                    <option value="{{ $lieu->id }}">{{ $lieu->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tarif</label>
                            <input type="text" class="form-control" name="prix" placeholder="Tarif">
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>

            @endif
        </div>
        <div class="col-md-12 mt-4">
            <div class="card">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Depart</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Tarif</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trajets as $key => $trajet)
                            <tr>
                                <th scope="row">{{ $key+1 }}</th>
                                <td>{{ App\Http\Controllers\CarryController::getLieu($trajet->debut)->nom }}</td>
                                <td>{{ App\Http\Controllers\CarryController::getLieu($trajet->fin)->nom }}</td>
                                <td>{{ $trajet->prix }}</td>
                                <td>
                                    <a href="" class="btn btn-primary">Commander</a>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
