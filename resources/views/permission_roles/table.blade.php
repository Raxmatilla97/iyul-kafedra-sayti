<div class="table-responsive">
    <table class="table" id="permissionRoles-table">
        <thead>
            <tr>
                <th>Huquq</th>
        <th>Role</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissionRoles as $permissionRole)
            <tr> 
                <td> {{ $permissionRole->permission->name }}</td>
            <td>{{ $permissionRole->role->name }}</td>
                <td>
                    {!! Form::open(['route' => ['permissionRoles.destroy', $permissionRole->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permissionRoles.show', [$permissionRole->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('permissionRoles.edit', [$permissionRole->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
