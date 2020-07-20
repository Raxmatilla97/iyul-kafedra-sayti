<div class="table-responsive">
    <table class="table" id="videoBanners-table">
        <thead>
            <tr>
                <th>Video banner sarlavhasi</th>
        <th>Qisqa mazmun</th>
        <th>Banner surati</th>
        <th>Video manzil</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($videoBanners as $videoBanner)
            <tr>
                <td>{{ $videoBanner->title }}</td>
            <td>{{ $videoBanner->small_desc }}</td>
            <td style="width: 150px" > <img width="70px" height="50px" src="{{ $videoBanner->image }}"></td>
          
            <td>   
              
              {{ $videoBanner->video }}
             
            
            </td>

       
                <td>
                    {!! Form::open(['route' => ['videoBanners.destroy', $videoBanner->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('videoBanners.show', [$videoBanner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('videoBanners.edit', [$videoBanner->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
