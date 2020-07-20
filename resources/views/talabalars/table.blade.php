<div class="table-responsive">
    <table class="table" id="talabalars-table">
        <thead>
            <tr>
                <th>Ismi</th>
        <th>Familyasi</th>
        <th>Sharifi</th>
        <th>Tugulgan yili</th>
    
        <th>Yashash Manzil</th>

   
        <th>Telefoni</th>
        <th>Uy telefoni</th>
        <th>Oquv turi</th>

        <th>O'qishga kirgan yili</th>
        <th>Guruhi</th>

                <th colspan="3">Qo'shimcha</th>
            </tr>
        </thead>
        <tbody>
        @foreach($talabalars as $talabalar)
            <tr>
            <td>{{ $talabalar->ism }}</td>
            <td>{{ $talabalar->familya }}</td>
            <td>{{ $talabalar->ota_ism }}</td>
            <td>{{ $talabalar->tugulgan_yil }}</td>
            <td>{{ $talabalar->tugulgan_joy }}</td>
            <td>{{ $talabalar->yashash_manzil }}</td>
   

            <td>{{ $talabalar->tell }}</td>
            <td>{{ $talabalar->uy_teli }}</td>
            <td>{{ $talabalar->oquv_turi_id }}</td>
 
            <td>{{ $talabalar->qabul_yili_id }}</td>
            <td>{{ $talabalar->guruh_id }}</td>
       
                <td>
                    {!! Form::open(['route' => ['talabalars.destroy', $talabalar->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('talabalars.show', [$talabalar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('talabalars.edit', [$talabalar->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
