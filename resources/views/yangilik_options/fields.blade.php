<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Yangilik qismidagi: asosiy sarlavha:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Small Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('small_title', 'Yangilik qismidagi: kichik sarlavha:') !!}
    {!! Form::text('small_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Small Desc Field -->
<div class="form-group col-sm-12">
    {!! Form::label('elon_desc', "E'lon qismi:") !!}
    {!! Form::textarea('elon_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    <br>
    {!! Form::submit('Sozlamni saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('yangilikOptions.index') }}" class="btn btn-danger">Yopish</a>
</div>
