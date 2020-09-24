@php
    $user = Auth::user();
@endphp
<button type="button" class="btn btn-success action_button" data-toggle="modal" data-target="#{{ $id ?? 'id'}}">
  Editer
</button>

<!-- Modal -->
<div class="modal fade" id="{{ $id ?? 'id'}}" tabindex="-1" aria-labelledby="{{ $id ?? 'id'}}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="{{ $id ?? 'id'}}Label">Editer un véhicule</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('cars.update',['car'=>$car]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="modal-body">
                @csrf

                <input type="text" class="form-control" name="owner_id" value="{{ $user->id }}" hidden>
                <input type="text" class="form-control" name="disponibilite" value="true" hidden>

                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Titre" value="{{ $car->name }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="volume" placeholder="Volume" value="{{ $car->volume }}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="ci" placeholder="Immatriculation du véhicule" value="{{ $car->ci }}">
                </div>

                <div class="form-group">
                    <input type="file" class="form-control" name="photo" >
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" cols="30" rows="10">{{ $car->description }}</textarea>
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
