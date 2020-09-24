<div class="table-responsive-sm">
    <table class="table table-striped" id="cars-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Photo</th>
        <th>Ci</th>
        <th>Owner Id</th>
        <th>Description</th>
        <th>Volume</th>
        <th>Disponibilite</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->name }}</td>
            <td>{{ $car->photo }}</td>
            <td>{{ $car->ci }}</td>
            <td>{{ $car->owner_id }}</td>
            <td>{{ $car->description }}</td>
            <td>{{ $car->volume }}</td>
            <td>{{ $car->disponibilite }}</td>
                <td>
                    {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cars.show', [$car->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cars.edit', [$car->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>