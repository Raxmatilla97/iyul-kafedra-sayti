<div class="table-responsive">
    <table class="table" id="oquvTuris-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Slug</th>
        <th>Desc</th>
        <th>Img</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($oquvTuris as $oquvTuri)
            <tr>
                <td>{{ $oquvTuri->name }}</td>
            <td>{{ $oquvTuri->slug }}</td>
            <td>{{ $oquvTuri->desc }}</td>
            <td>{{ $oquvTuri->img }}</td>
                <td>
                    {!! Form::open(['route' => ['oquvTuris.destroy', $oquvTuri->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('oquvTuris.show', [$oquvTuri->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('oquvTuris.edit', [$oquvTuri->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
