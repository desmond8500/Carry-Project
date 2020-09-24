<div class="table-responsive-sm">
    <table class="table table-striped" id="trajets-table">
        <thead>
            <tr>
                <th>Car Id</th>
        <th>Debut</th>
        <th>Fin</th>
        <th>Prix</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($trajets as $trajet)
            <tr>
                <td>{{ $trajet->car_id }}</td>
            <td>{{ $trajet->debut }}</td>
            <td>{{ $trajet->fin }}</td>
            <td>{{ $trajet->prix }}</td>
            <td>{{ $trajet->description }}</td>
                <td>
                    {!! Form::open(['route' => ['trajets.destroy', $trajet->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('trajets.show', [$trajet->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('trajets.edit', [$trajet->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>