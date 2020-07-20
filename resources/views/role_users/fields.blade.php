<!-- Role Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('role_id', 'Unvonni belgilang:') !!}
    {!! Form::select('role_id', $role, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-3">
    {!! Form::label('user_id', 'Foydalanuvchini belgilang:') !!}
    {!! Form::select('user_id', $user, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('roleUsers.index') }}" class="btn btn-danger">Yopish</a>
</div>
