<div class="table-responsive">
    <table class="table" id="xamkorlars-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Slug</th>
        <th>Image</th>
        <th>Active</th>
        <th>Text</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($xamkorlars as $xamkorlar)
            <tr>
                <td>{{ $xamkorlar->name }}</td>
            <td>{{ $xamkorlar->slug }}</td>
            <td>{{ $xamkorlar->image }}</td>
            <td>{{ $xamkorlar->active }}</td>
            <td>{{ $xamkorlar->text }}</td>
            <td>{{ $xamkorlar->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['xamkorlars.destroy', $xamkorlar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('xamkorlars.show', [$xamkorlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('xamkorlars.edit', [$xamkorlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
