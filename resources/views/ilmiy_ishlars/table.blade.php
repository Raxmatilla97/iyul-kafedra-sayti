<div class="table-responsive">
    <table class="table" id="ilmiyIshlars-table">
        <thead>
            <tr>
                <th>Ilmiy ish nomi</th>
        <th>Ilmiy ish bajaruvchi</th>
        <th>Muqova surati</th>
        <th>Saytga qo'yilgan vaqt</th>
   
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ilmiyIshlars as $ilmiyIshlar)
            <tr>
                <td>{{ $ilmiyIshlar->title }}</td>
            <td>{{ $ilmiyIshlar->user->name }}</td>
                <td style="width: 120x" > <img width="70px" height="50px" src="{{ $ilmiyIshlar->image }}"></td>
            <td>{{ $ilmiyIshlar->image }}</td>
          
            <td>{{ $ilmiyIshlar->created_at->format('d. M. Y') }}</td>
                <td>
                    {!! Form::open(['route' => ['ilmiyIshlars.destroy', $ilmiyIshlar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ilmiyIshlars.show', [$ilmiyIshlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ilmiyIshlars.edit', [$ilmiyIshlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
