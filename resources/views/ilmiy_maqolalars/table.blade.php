<div class="table-responsive">
    <table class="table" id="ilmiyMaqolalars-table">
        <thead>
            <tr>
                <th>Maqola nomi</th>
     
        <th>Muqova surati</th>
        <td>Yaratilgan sana</td>
        <th>Yaratuvchi</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ilmiyMaqolalars as $ilmiyMaqolalar)
            <tr>
                <td>{{ $ilmiyMaqolalar->title }}</td>
     
                <td style="width: 150px" > <img width="70px" height="50px" src="{{ $ilmiyMaqolalar->image }}"></td>
            <td>{{ $ilmiyMaqolalar->created_at->format('d. M. Y') }}</td>
            

        
            <td>{{ $ilmiyMaqolalar->user->name   }}</td>
                <td>
                    {!! Form::open(['route' => ['ilmiyMaqolalars.destroy', $ilmiyMaqolalar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ilmiyMaqolalars.show', [$ilmiyMaqolalar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ilmiyMaqolalars.edit', [$ilmiyMaqolalar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
