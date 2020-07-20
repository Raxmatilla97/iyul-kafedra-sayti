<!-- Ism Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ism', 'Ism:') !!}
    {!! Form::text('ism', null, ['class' => 'form-control']) !!}
</div>

<!-- Familya Field -->
<div class="form-group col-sm-6">
    {!! Form::label('familya', 'Familya:') !!}
    {!! Form::text('familya', null, ['class' => 'form-control']) !!}
</div>

<!-- Sharif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sharif', 'Sharif:') !!}
    {!! Form::text('sharif', null, ['class' => 'form-control']) !!}
</div>

<!-- Tugulgan Yil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tugulgan_yil', 'Tugulgan Yil:') !!}
    {!! Form::text('tugulgan_yil', null, ['class' => 'form-control']) !!}
</div>

<!-- Tugulgan Joy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tugulgan_joy', 'Tugulgan Joy:') !!}
    {!! Form::text('tugulgan_joy', null, ['class' => 'form-control']) !!}
</div>

<!-- Yashash Manzil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yashash_manzil', 'Yashash Manzil:') !!}
    {!! Form::text('yashash_manzil', null, ['class' => 'form-control']) !!}
</div>

<!-- Ishlamoqda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ishlamoqda', 'Ishlamoqda:') !!}
    {!! Form::text('ishlamoqda', null, ['class' => 'form-control']) !!}
</div>

<!-- Fanlar Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fanlar_id', 'Fanlar Id:') !!}
    {!! Form::number('fanlar_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Ser Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass_ser', 'Pass Ser:') !!}
    {!! Form::text('pass_ser', null, ['class' => 'form-control']) !!}
</div>

<!-- Pass Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pass_nom', 'Pass Nom:') !!}
    {!! Form::text('pass_nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Jinsi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jinsi', 'Jinsi:') !!}
    {!! Form::text('jinsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Tell Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tell', 'Tell:') !!}
    {!! Form::text('tell', null, ['class' => 'form-control']) !!}
</div>

<!-- Uy Teli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uy_teli', 'Uy Teli:') !!}
    {!! Form::text('uy_teli', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mavqe Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mavqe_id', 'Mavqe Id:') !!}
    {!! Form::number('mavqe_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('oqituvchilars.index') }}" class="btn btn-default">Cancel</a>
</div>
