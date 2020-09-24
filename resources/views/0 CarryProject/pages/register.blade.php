@extends('0 CarryProject.layout')

@section('content')
    <div class="row mt-4">
        <div class="col-md-6 offset-3 ">
            <h3 class="text-center mb-4">Connexion</h3>
        </div>
        <div class="col-md-4 offset-4">
            <form action="{{ route('carry.auth') }}" method="post" class="row">
                @csrf
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="tel" placeholder="Téléphone" required>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group col-md-12">
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                </div>
                <div class="form-group col-md-6">
                    <select name="role" class="form-control">
                        <option value="1">Client</option>
                        <option value="2">Transporteur</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('carry.login') }}" class="float-right">Se connecter</a>
                </div>

            </form>
        </div>
    </div>
@endsection
