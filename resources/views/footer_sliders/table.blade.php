<div class="table-responsive">
    <table class="table" id="footerSliders-table">
        <thead>
            <tr>
                <th>Qism nomi</th>
                <th>Manzili</th>
        <th>Surati</th>
   
                <th colspan="3">Qo'shimcha ish</th>
            </tr>
        </thead>
        <tbody>
        @foreach($footerSliders as $footerSlider)
            <tr>
                <td>{{ $footerSlider->title }}</td>
                <td>{{ $footerSlider->slug }}</td>
        
            <td style="width: 150px" > <img width="70px" height="50px" src="{{ $footerSlider->image }}"></td>
                <td>
                    {!! Form::open(['route' => ['footerSliders.destroy', $footerSlider->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('footerSliders.show', [$footerSlider->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('footerSliders.edit', [$footerSlider->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Sizning ishonchingiz komilmi?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
