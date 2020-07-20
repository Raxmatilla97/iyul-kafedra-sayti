<!-- Permission Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('permission_id', 'Huquqni tanlang:') !!}
    {!! Form::select('permission_id', $perms, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('user_id', 'Foydalanuvchini tanlang:') !!}
    {!! Form::select('user_id', $user, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('permissionUsers.index') }}" class="btn btn-danger">Yopish</a>
</div>
