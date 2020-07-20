<div class="table-responsive">
    <table class="table" id="fanlars-table">
        <thead>
            <tr>
                <th>Surat</th>
        <th>Fan nomi</th>    
        
        <th>Qo'shdi</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fanlars as $fanlar)
            <tr>
            <td style="width: 150px" > <img width="70px" height="50px" src="{{ $fanlar->image }}"></td>
                <td>{{ $fanlar->title }}</td>           
                <td>{{ $fanlar->user->name }}</td>
                    <td>
                        {!! Form::open(['route' => ['fanlars.destroy', $fanlar->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('fanlars.show', [$fanlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('fanlars.edit', [$fanlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
