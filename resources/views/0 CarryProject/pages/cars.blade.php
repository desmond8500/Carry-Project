@extends('0 CarryProject.layout')

@section('content')
    <div class="row mt-4 ">
        <div class="col-md-12 mb-4">
            @php
                $modal = (object) array("button"=>"Ajouter un véhicule", "title"=> "Ajouter un véhicule");
            @endphp
            <x-modal :modal="$modal" >
                <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf

                        <input type="text" class="form-control" name="owner_id" value="{{ $user->id }}" hidden>
                        <input type="text" class="form-control" name="disponibilite" value="true" hidden>

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Titre">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="volume" placeholder="Volume">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="ci" placeholder="Immatriculation du véhicule">
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="photo" >
                        </div>
                        <div class="form-group">
                            <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </x-modal>
        </div>
        <div class="col-md-8">
                 @foreach ($cars as $car)
                        <x-carry.carinfo :car="$car"/>
                @endforeach
        </div>


        <div class="col-md-4">
            <div class="card border border-dark">
                <div class="card-body">
                    <img src="{{ asset('icons/005-user.png') }}" class="img-fluid" alt="">

                    <ul class="list-group list-group-flush">
                        <h3 class="list-group-item text-center">
                            <b>{{ $user->prenom }} {{ $user->nom }}</b>
                        </h3>
                        <li class="list-group-item">
                            <b>Téléphone :</b> <span class="float-right">{{ $user->tel }}</span>
                        </li>
                        <li class="list-group-item">
                            <b>Email :</b> <span class="float-right">{{ $user->email }}</span>
                        </li>
                    </ul>
                    @include('0 CarryProject.form.editUser')
                </div>
            </div>
        </div>
    </div>
@endsection
