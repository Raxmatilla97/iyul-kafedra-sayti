<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $gridCard->title }}</p>
</div>

<!-- Small Desc Field -->
<div class="form-group">
    {!! Form::label('small_desc', 'Small Desc:') !!}
    <p>{{ $gridCard->small_desc }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $gridCard->image }}</p>
</div>

<!-- Slug Field -->
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    <p>{{ $gridCard->slug }}</p>
</div>

