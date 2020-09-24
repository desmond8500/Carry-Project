<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $trajet->id }}</p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Id:') !!}
    <p>{{ $trajet->car_id }}</p>
</div>

<!-- Debut Field -->
<div class="form-group">
    {!! Form::label('debut', 'Debut:') !!}
    <p>{{ $trajet->debut }}</p>
</div>

<!-- Fin Field -->
<div class="form-group">
    {!! Form::label('fin', 'Fin:') !!}
    <p>{{ $trajet->fin }}</p>
</div>

<!-- Prix Field -->
<div class="form-group">
    {!! Form::label('prix', 'Prix:') !!}
    <p>{{ $trajet->prix }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $trajet->description }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $trajet->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $trajet->updated_at }}</p>
</div>

