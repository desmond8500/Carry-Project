@extends('0 CarryProject.layout')

@section('content')
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card ">
                @if ($list==null)
                    <div class="card-body">
                        Vous n'avez aucune commande en cours
                    </div>
                @else
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Commande</th>
                            <th scope="col">Tarif</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $key => $commande)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $commande->name }}</td>
                                    <td>{{ $commande->prix ?? "15 000 CFA" }}</td>
                                    <td>
                                        <button class="btn btn-primary">Annuler la commande</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                @endempty

            </div>
        </div>
    </div>
@endsection
