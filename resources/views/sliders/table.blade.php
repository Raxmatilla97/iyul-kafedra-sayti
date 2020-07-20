<div class="table-responsive">
    <table class="table" id="sliders-table">
        <thead>
            <tr>
                <th>Slayd surati</th>
                <th>Sarlavha</th>
        <th>Kichik sarlavha</th>
      
       
       
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sliders as $sliders)
            <tr>
                <td style="width: 150px" > <img width="70px" height="50px" src="{{ $sliders->image }}"></td>
                <td>{{ $sliders->sarlavha }}</td>
            <td>{{ $sliders->kichik_sarlavha }}</td>
         
          
       
                <td>
                    {!! Form::open(['route' => ['sliders.destroy', $sliders->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sliders.show', [$sliders->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('sliders.edit', [$sliders->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
