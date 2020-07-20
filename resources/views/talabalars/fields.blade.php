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

<!-- Ota Ism Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ota_ism', 'Ota Ism:') !!}
    {!! Form::text('ota_ism', null, ['class' => 'form-control']) !!}
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

<!-- Oquv Turi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oquv_turi_id', 'Oquv Turi Id:') !!}
    {!! Form::number('oquv_turi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Qabul Yili Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qabul_yili_id', 'Qabul Yili Id:') !!}
    {!! Form::number('qabul_yili_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Guruh Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('guruh_id', 'Guruh Id:') !!}
    {!! Form::number('guruh_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Yon Kod Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('yon_kod_id', 'Yon Kod Id:') !!}
    {!! Form::number('yon_kod_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('talabalars.index') }}" class="btn btn-default">Cancel</a>
</div>
