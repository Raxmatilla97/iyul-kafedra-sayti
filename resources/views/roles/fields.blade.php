
<br>
<br>

<div class="form-group col-sm-6">
    {!! Form::label('name', "Unvon nomini kiriting:") !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "Unvon manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-target']) !!}
</div>
<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Unvonga birqancha tasnif bering, u nega ochildi va nima xususiyatlarga ega.:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level', 'Unvon drajasi. (admin hardoyim 5):') !!}
    {!! Form::number('level', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-danger">Yopish</a>
</div>
@include('addons.slug')