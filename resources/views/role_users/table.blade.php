<div class="table-responsive">
    <table class="table" id="roleUsers-table">
        <thead>
            <tr>
                <th>Unvon (Role_id)</th>
        <th>Foydalanuvchi ismi (User_id)</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roleUsers as $roleUser)
            <tr>
                <td>{{ $roleUser->role->name}} = Role ID: <b>{{ $roleUser->role_id}}</b></td>
            <td>{{ $roleUser->user->name }} = User ID: <b>{{ $roleUser->user_id}}</b></td>
                <td>
                    {!! Form::open(['route' => ['roleUsers.destroy', $roleUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roleUsers.show', [$roleUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('roleUsers.edit', [$roleUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
