<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $videoBanner->title }}</p>
</div>

<!-- Small Desc Field -->
<div class="form-group">
    {!! Form::label('small_desc', 'Small Desc:') !!}
    <p>{{ $videoBanner->small_desc }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $videoBanner->image }}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{{ $videoBanner->video }}</p>
</div>

