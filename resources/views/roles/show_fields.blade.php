<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $roles->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $roles->slug }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $roles->description }}</p>
</div>

<!-- Level Field -->
<div class="form-group">
    {!! Form::label('level', 'Level:') !!}
    <p>{{ $roles->level }}</p>
</div>

