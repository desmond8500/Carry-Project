@extends('0 CarryProject.layout')

@section('content')
    <div class="row">
        @if ($list)
            @foreach ($list as $item)
                {{-- @dump($item) --}}
                <div class="card text-left mt-4 col-md-6 border border-dark">
                    <div class="card-body">
                    <h4 class="card-title">Commande #</h4>
                    <p class="card-text">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b> Client </b>
                                <span class="float-right"> {{ $item->client->prenom }} {{ $item->client->nom }} </span>
                            </li>
                            <li class="list-group-item">
                                <b> Départ </b>
                                <span class="float-right"> {{ $item->trajet_info->debut->nom }}  </span>
                            </li>
                            <li class="list-group-item">
                                <b> Destination </b>
                                <span class="float-right"> {{ $item->trajet_info->fin->nom }} </span>
                            </li>
                        </ul>
                    </p>
                    <a class="btn btn-primary mb-1" type="submit">Accepter la commande</a>
                    <a class="btn btn-danger" type="submit">Refuser la commande</a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                Vous n'avez aucune requette pour le moment
            </div>
        @endif
    </div>
@endsection
