@php
    $user = Auth::user();
@endphp
<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#{{ $id ?? 'id'}}">
  Editer
</button>

<!-- Modal -->
<div class="modal fade" id="{{ $id ?? 'id'}}" tabindex="-1" aria-labelledby="{{ $id ?? 'id'}}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="{{ $id ?? 'id'}}Label">Editer votre compte</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('carry.useredit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                @csrf

                <div class="form-group">
                    <label for="">Prénom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom" value="{{ $user->prenom }}">
                </div>
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="Prénom" value="{{ $user->nom }}">
                </div>
                <div class="form-group">
                    <label for="">Téléphone</label>
                    <input type="tel" class="form-control" name="tel" placeholder="Téléphone" value="{{ $user->tel }}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-success">Modifier</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
