<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Unvon nomi</th>
     
        <th>Unvonga berilgan qisqa tasnif</th>
        <th>Darajasi</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $roles)
            <tr>
                <td>{{ $roles->name }}</td>
         
            <td>{{ $roles->description }}</td>
            <td>{{ $roles->level }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $roles->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$roles->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('roles.edit', [$roles->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
