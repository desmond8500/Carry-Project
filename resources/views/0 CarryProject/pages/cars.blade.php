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

        @foreach ($cars as $car)
            <div class="col-md-8">
                <x-carry.carinfo :car="$car"/>
            </div>
        @endforeach




    </div>
@endsection
