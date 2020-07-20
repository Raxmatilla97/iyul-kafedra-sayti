<div class="table-responsive">
    <table class="table" id="oquvAdabiyotlars-table">
        <thead>
            <tr>
                <th>Muqova surati</th>
                <th>Elektron resurs nomi</th>
        <th>Joylangan vaqti</th>
        

        <th>Joyladi</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($oquvAdabiyotlars as $oquvAdabiyotlar)
            <tr>
                <td style="width: 150px" > <img width="70px" height="50px" src="{{ $oquvAdabiyotlar->image }}"></td>
                <td>{{ $oquvAdabiyotlar->title }}</td>
                <td>{{ $oquvAdabiyotlar->created_at->format('d. M. Y') }}</td>
    
       
            <td>{{ $oquvAdabiyotlar->user->name }}</td>
                <td>
                    {!! Form::open(['route' => ['oquvAdabiyotlars.destroy', $oquvAdabiyotlar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('oquvAdabiyotlars.show', [$oquvAdabiyotlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('oquvAdabiyotlars.edit', [$oquvAdabiyotlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
