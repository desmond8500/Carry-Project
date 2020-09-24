<div class="table-responsive-sm">
    <table class="table table-striped" id="commandes-table">
        <thead>
            <tr>
                <th>Client Id</th>
        <th>Car Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($commandes as $commande)
            <tr>
                <td>{{ $commande->client_id }}</td>
            <td>{{ $commande->car_id }}</td>
                <td>
                    {!! Form::open(['route' => ['commandes.destroy', $commande->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('commandes.show', [$commande->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('commandes.edit', [$commande->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>