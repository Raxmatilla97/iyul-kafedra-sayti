<div class="table-responsive">
    <table class="table" id="firstbanners-table">
        <thead>
            <tr>
                <th>Banner birinchi sarlavhasi</th>
        <th>Kichik gap bo'lagi</th>
    
      
        <th>Banner surati</th>
 
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($firstbanners as $firstbanner)
            <tr>
                <td>{{ $firstbanner->title }}</td>
            <td>{{ $firstbanner->small_desc }}</td>
        
       
            <td style="width: 120x" > <img width="70px" height="50px" src="{{ $firstbanner->image }}"></td>
      
                <td>
                    {!! Form::open(['route' => ['firstbanners.destroy', $firstbanner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('firstbanners.show', [$firstbanner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('firstbanners.edit', [$firstbanner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
