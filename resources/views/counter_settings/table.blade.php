<div class="table-responsive">
    <table class="table" id="counterSettings-table">
        <b><a href="https://fontawesome.com/v4.7.0/icons/">Iconkalar kodini olish</a></b>
        <thead>
            <tr>
                <th>Hisoblagich raqami</th>
        <th>Unga berilgan tasnif</th>
        <th>Iconka kodi</th>
                <th colspan="3">Qo'shimcha ishlar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($counterSettings as $counterSetting)
            <tr>
                <td>{{ $counterSetting->number }}</td>
            <td>{{ $counterSetting->small_desc }}</td>
            <td><i class="{{ $counterSetting->icon }}"></i> {{ $counterSetting->icon }}</td>
                <td>
                    {!! Form::open(['route' => ['counterSettings.destroy', $counterSetting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('counterSettings.show', [$counterSetting->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('counterSettings.edit', [$counterSetting->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
