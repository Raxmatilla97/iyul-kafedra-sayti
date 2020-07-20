<div class="table-responsive">
    <table class="table" id="talabalarGuruhlaris-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Year</th>
        <th>Arxive</th>
        <th>User Id</th>
        <th>Teacher Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($talabalarGuruhlaris as $talabalarGuruhlari)
            <tr>
                <td>{{ $talabalarGuruhlari->name }}</td>
            <td>{{ $talabalarGuruhlari->year }}</td>
            <td>{{ $talabalarGuruhlari->arxive }}</td>
            <td>{{ $talabalarGuruhlari->user_id }}</td>
            <td>{{ $talabalarGuruhlari->teacher_id }}</td>
                <td>
                    {!! Form::open(['route' => ['talabalarGuruhlaris.destroy', $talabalarGuruhlari->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('talabalarGuruhlaris.show', [$talabalarGuruhlari->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('talabalarGuruhlaris.edit', [$talabalarGuruhlari->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
