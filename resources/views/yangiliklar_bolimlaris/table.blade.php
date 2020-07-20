<div class="table-responsive">
    <table class="table" id="yangiliklarBolimlaris-table">
        <thead>
            <tr>
                <th>Yangilik bo'limining nomlanishi</th>
        
        <th>Icon yoki surati</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($yangiliklarBolimlaris as $yangiliklarBolimlari)
            <tr>
                <td>{{ $yangiliklarBolimlari->title }}</td>
       
    <td style="width: 150px" > <img width="70px" height="50px" src="{{ $yangiliklarBolimlari->img }}"></td>
                <td>
                    {!! Form::open(['route' => ['yangiliklarBolimlaris.destroy', $yangiliklarBolimlari->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('yangiliklarBolimlaris.show', [$yangiliklarBolimlari->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('yangiliklarBolimlaris.edit', [$yangiliklarBolimlari->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
