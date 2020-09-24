<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="card card-body mb-2 border border-secondary">
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
                </ul>

                {{-- <a href="{{ route('carry.car',['car'=>$car]) }}" class="btn btn-primary float-right action_button">Consulter</a> --}}
            </div>
        </div>
    </div>
</div>
