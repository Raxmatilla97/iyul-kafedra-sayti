<div class="table-responsive">
    <table class="table" id="yangilikOptions-table">
        <thead>
            <tr>
                <th>Yangilik qismidagi: asosiy sarlavha</th>
        <th>Yangilik qismidagi: kichik sarlavha</th>
        <th>E'lon qismidagi:</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($yangilikOptions as $yangilikOptions)
            <tr>
                <td>{{ $yangilikOptions->title }}</td>
            <td>{{ $yangilikOptions->small_title }}</td>
            <td>{{ $yangilikOptions->elon_desc }}</td>
                <td>
                    {!! Form::open(['route' => ['yangilikOptions.destroy', $yangilikOptions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('yangilikOptions.show', [$yangilikOptions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('yangilikOptions.edit', [$yangilikOptions->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
