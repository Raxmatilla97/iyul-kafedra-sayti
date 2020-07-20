<div class="table-responsive">
    <table class="table" id="permissionUsers-table">
        <thead>
            <tr>
                <th>Huquqnomi</th>
        <th>Foydalanuvchi ismi</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissionUsers as $permissionUser)
            <tr>
                <td>{{ $permissionUser->permission->name }} Huqu ID: <b>{{ $permissionUser->permission_id }}</b></td>
            <td>{{ $permissionUser->user->name }} User ID: <b>{{ $permissionUser->user_id }}</b></td>
                <td>
                    {!! Form::open(['route' => ['permissionUsers.destroy', $permissionUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permissionUsers.show', [$permissionUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('permissionUsers.edit', [$permissionUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
