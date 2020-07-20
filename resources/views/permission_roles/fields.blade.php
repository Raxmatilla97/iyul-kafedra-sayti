<!-- Permission Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('permission_id', 'Huquqni tanlang:') !!}
    {!! Form::select('permission_id', $permis, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('role_id', 'Rolni tanlang:') !!}
    {!! Form::select('role_id', $role, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('permissionRoles.index') }}" class="btn btn-danger">Yopish</a>
</div>
