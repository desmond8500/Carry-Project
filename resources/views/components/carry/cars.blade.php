<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="card card-body mb-2">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ asset($car->image) }}" alt="" >
            </div>
            <div class="col-md-8">
                <h3>{{ $car->name }}</h3>
                <div>
                    <span class="title">Volume:</span> {{ $car->volume }}
                </div>
                <div>
                    <span class="title">Tarif:</span> {{ $car->prix }}
                </div>
                <a href="" class="btn btn-primary float-right">Consulter</a>
            </div>
        </div>
    </div>

</div>
