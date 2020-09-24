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
                        <b>Volume :</b> <span class="float-right">{{ $car->volume }} cm3</span>
                    </li>
                    <li class="list-group-item">
                        <b>Prix :</b> <span class="float-right">{{ $car->prix ?? '15 000' }} CFA</span>
                    </li>
                    <li class="list-group-item">
                        <b>Immatriculation :</b> <span class="float-right">{{ $car->ci ?? '15 000' }} </span>
                    </li>
                    <li class="list-group-item">
                    </li>
                </ul>
                <p>
                    {{ $car->description }}
                </p>

                <a href="{{ route('carry.car',['id'=>$car->id]) }}" class="btn btn-primary ">Consulter</a>

                @include('0 CarryProject.form.editCar',['id'=>"dd$car->id"])

            </div>
        </div>
    </div>
</div>
