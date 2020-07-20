<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $permissions->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $permissions->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $permissions->description }}</p>
</div>

<!-- Model Field -->
<div class="form-group">
    {!! Form::label('model', 'Model:') !!}
    <p>{{ $permissions->model }}</p>
</div>

