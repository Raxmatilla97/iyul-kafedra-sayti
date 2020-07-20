<div class="table-responsive">
    <table class="table" id="gridCards-table">
        <thead>
            <tr>
                <th>Karta nomi</th>
        <th>Qisqa gapi</th>
        <th>Surati</th>
      
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gridCards as $gridCard)
            <tr>
                <td>{{ $gridCard->title }}</td>
            <td>{{ $gridCard->small_desc }}</td>
            <td style="width: 150px" > <img width="70px" height="50px" src="{{ $gridCard->image }}"></td>
           
                <td>
                    {!! Form::open(['route' => ['gridCards.destroy', $gridCard->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gridCards.show', [$gridCard->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('gridCards.edit', [$gridCard->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
