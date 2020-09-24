<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $car->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $car->name }}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $car->photo }}</p>
</div>

<!-- Ci Field -->
<div class="form-group">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{{ $car->ci }}</p>
</div>

<!-- Owner Id Field -->
<div class="form-group">
    {!! Form::label('owner_id', 'Owner Id:') !!}
    <p>{{ $car->owner_id }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $car->description }}</p>
</div>

<!-- Volume Field -->
<div class="form-group">
    {!! Form::label('volume', 'Volume:') !!}
    <p>{{ $car->volume }}</p>
</div>

<!-- Disponibilite Field -->
<div class="form-group">
    {!! Form::label('disponibilite', 'Disponibilite:') !!}
    <p>{{ $car->disponibilite }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $car->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $car->updated_at }}</p>
</div>

