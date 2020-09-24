<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="card card-body mb-2 border border-secondary">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset("storage/$car->photo") }}" alt="{{ $car->photo }}" >
            </div>
            <div class="col-md-8">
                <h3>{{ $car->name }}</h3>
                <div>
                    <span class="title">Volume:</span> {{ $car->volume }}
                </div>
                <div>
                    <span class="title">Tarif:</span> {{ $car->prix ?? "15 000 CFA"}}
                </div>
                <a href="{{ route('carry.car',['id'=>$car->id]) }}" class="btn btn-primary float-right action_button">Consulter</a>
            </div>
        </div>
    </div>

</div>
