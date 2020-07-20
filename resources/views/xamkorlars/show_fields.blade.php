<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $xamkorlar->name }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $xamkorlar->slug }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $xamkorlar->image }}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{{ $xamkorlar->active }}</p>
</div>

<!-- Text Field -->
<div class="form-group">
    {!! Form::label('text', 'Text:') !!}
    <p>{{ $xamkorlar->text }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $xamkorlar->user_id }}</p>
</div>

