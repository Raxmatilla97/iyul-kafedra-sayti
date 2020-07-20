


<div class=" box-body table-responsive no-padding">
    <table class="table table-hover" id="yangiliklars-table">
        <thead>
            <tr>
                <th>Muqova</th>
                <th>Yangilik nomi</th>
                <th>Yangilik bo'limi</th>
        <th>Activligi</th>
        <th>Chop etilgan sana</th>
        
        
        <th>Yangilik avtori</th>
        
                <th colspan="3">Yangilik boshqaruvi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($yangiliklars as $yangiliklar)
            <tr>
                <td style="width: 85px" > <img width="70px" height="50px" src="{{ $yangiliklar->image }}"></td>
                <td>{{ $yangiliklar->title }}</td>
                <td>{{ $yangiliklar->cate->title}}</td>

            <td><span @if ($yangiliklar->active == 1) class="label label-success">Yangilik activ! @else class="label label-danger">Active emas! @endif </span></td>
           
            <td>{{ $yangiliklar->created_at->format('d. M. Y') }}</td>
            
            
            <td>{{ $yangiliklar->user->name }}</td>
        
                <td>
                    {!! Form::open(['route' => ['yangiliklars.destroy', $yangiliklar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('index.yangiliklar', [$yangiliklar->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('yangiliklars.edit', [$yangiliklar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

