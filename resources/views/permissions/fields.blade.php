<br>
<br>

<div class="form-group col-sm-6">
    {!! Form::label('title', "Yangi huquqning nomlanishi:") !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "huquq manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-target']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Huquqga berilayotgan ruhsat tasnifi:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model: masalan(Permission)') !!}
    {!! Form::text('model', null, ['class' => 'form-control', 'plasehonder' => 'Permission']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('permissions.index') }}" class="btn btn-danger">Yopish</a>
</div>
@include('addons.slug')