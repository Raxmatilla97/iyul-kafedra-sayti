<div class="table-responsive">
    <table class="table" id="yonalishKodlaris-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($yonalishKodlaris as $yonalishKodlari)
            <tr>
                <td>{{ $yonalishKodlari->name }}</td>
                <td>
                    {!! Form::open(['route' => ['yonalishKodlaris.destroy', $yonalishKodlari->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('yonalishKodlaris.show', [$yonalishKodlari->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('yonalishKodlaris.edit', [$yonalishKodlari->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
