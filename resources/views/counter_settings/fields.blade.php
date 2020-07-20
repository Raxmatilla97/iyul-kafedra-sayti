<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Raqam:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Small Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('small_desc', 'Shu raqamga izoh:') !!}
    {!! Form::text('small_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icon kodi:') !!}
    {!! Form::text('icon', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('counterSettings.index') }}" class="btn btn-danger">Yopish</a>
</div>
