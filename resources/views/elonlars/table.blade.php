<div class="table-responsive">
    <table class="table" id="elonlars-table">
        <thead>
            <tr>  
                <th>Muqova</th> 
                <th>E'lon nomlanishi</th> 
                <th>Yozilgan sana</th>
                <th>E'lon yozgan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($elonlars as $elonlar)
            <tr>               
            <td style="width: 150px" > <img width="70px" height="50px" src="{{ $elonlar->image }}"></td>
            <td>{{ $elonlar->title }}</td> 
            <td>{{ $elonlar->created_at->format('d. M. Y') }}</td>
            <td>{{ $elonlar->user->name }}</td>
                <td>
                    {!! Form::open(['route' => ['elonlars.destroy', $elonlar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('index.elonlar', [$elonlar->slug]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('elonlars.edit', [$elonlar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
