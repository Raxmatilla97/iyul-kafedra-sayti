<div class="table-responsive">
    <table class="table" id="permissions-table">
        <thead>
            <tr>
                <th>Huquq nomi</th>
    
        <th>Unga berilgan tasnif</th>
        <th>Ishlatilayotgan model</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permissions)
            <tr>
                <td>{{ $permissions->name }}</td>

            <td>{{ $permissions->description }}</td>
            <td>{{ $permissions->model }}</td>
                <td>
                    {!! Form::open(['route' => ['permissions.destroy', $permissions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permissions.show', [$permissions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('permissions.edit', [$permissions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
