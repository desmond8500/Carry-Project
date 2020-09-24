<div class="table-responsive-sm">
    <table class="table table-striped" id="lieus-table">
        <thead>
            <tr>
                <th>Nom</th>
        <th>Description</th>
        <th>Pays</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lieus as $lieu)
            <tr>
                <td>{{ $lieu->nom }}</td>
            <td>{{ $lieu->description }}</td>
            <td>{{ $lieu->pays }}</td>
                <td>
                    {!! Form::open(['route' => ['lieus.destroy', $lieu->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lieus.show', [$lieu->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('lieus.edit', [$lieu->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>