<div class="table-responsive">
    <table class="table" id="gallereyas-table">
        <thead>
            <tr>
                <th>Surat ko'rinishi</th>
                <th>Surat nomi</th>
        
        <th>Narxlanishi</th>
        <th>Chizilgan vaqt</th>
      
      
        <th>Manzil</th>
        <th>Tellefon</th>
        <th>Kirituvchi</th>
        <th>Yaratilgan vaqt</th>
        <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gallereyas as $gallereya)
            <tr> 
                
                <td style="width: 120x" > <img width="70px" height="50px" src="{{ $gallereya->image }}"></td>
            <td>{{ $gallereya->title }}</td>
         
            <td>{{ $gallereya->narx }}</td>
            <td>{{ $gallereya->chizilgan_yil }}</td>        
            <td>{{ $gallereya->addres }}</td>
            <td>{{ $gallereya->tell }}</td>
            <td>{{ $gallereya->user->name }}</td>
            <td>{{ $gallereya->created_at }}</td>
          
                <td>
                    {!! Form::open(['route' => ['gallereyas.destroy', $gallereya->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gallereyas.show', [$gallereya->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('gallereyas.edit', [$gallereya->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
