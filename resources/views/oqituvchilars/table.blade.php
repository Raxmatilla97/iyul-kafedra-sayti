<div class="table-responsive">
    <table class="table" id="oqituvchilars-table">
        <thead>
            <tr>
                <th>Ism</th>
        <th>Familya</th>
        <th>Sharif</th>
        <th>Tugulgan Yil</th>
        <th>Tugulgan Joy</th>
        <th>Yashash Manzil</th>
        <th>Ishlamoqda</th>
        <th>Fanlar Id</th>
        <th>Pass Ser</th>
        <th>Pass Nom</th>
        <th>Jinsi</th>
        <th>Tell</th>
        <th>Uy Teli</th>
        <th>User Id</th>
        <th>Mavqe Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($oqituvchilars as $oqituvchilar)
            <tr>
                <td>{{ $oqituvchilar->ism }}</td>
            <td>{{ $oqituvchilar->familya }}</td>
            <td>{{ $oqituvchilar->sharif }}</td>
            <td>{{ $oqituvchilar->tugulgan_yil }}</td>
            <td>{{ $oqituvchilar->tugulgan_joy }}</td>
            <td>{{ $oqituvchilar->yashash_manzil }}</td>
            <td>{{ $oqituvchilar->ishlamoqda }}</td>
            <td>{{ $oqituvchilar->fanlar_id }}</td>
            <td>{{ $oqituvchilar->pass_ser }}</td>
            <td>{{ $oqituvchilar->pass_nom }}</td>
            <td>{{ $oqituvchilar->jinsi }}</td>
            <td>{{ $oqituvchilar->tell }}</td>
            <td>{{ $oqituvchilar->uy_teli }}</td>
            <td>{{ $oqituvchilar->user_id }}</td>
            <td>{{ $oqituvchilar->mavqe_id }}</td>
                <td>
                    {!! Form::open(['route' => ['oqituvchilars.destroy', $oqituvchilar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('oqituvchilars.show', [$oqituvchilar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('oqituvchilars.edit', [$oqituvchilar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
