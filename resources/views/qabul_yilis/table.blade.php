<div class="table-responsive">
    <table class="table" id="qabulYilis-table">
        <thead>
            <tr>
                <th>Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($qabulYilis as $qabulYili)
            <tr>
                <td>{{ $qabulYili->year }}</td>
                <td>
                    {!! Form::open(['route' => ['qabulYilis.destroy', $qabulYili->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('qabulYilis.show', [$qabulYili->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('qabulYilis.edit', [$qabulYili->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
