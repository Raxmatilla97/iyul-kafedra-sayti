@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ilmiy Maqolalar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ilmiyMaqolalar, ['route' => ['ilmiyMaqolalars.update', $ilmiyMaqolalar->id], 'method' => 'patch']) !!}

                        @include('ilmiy_maqolalars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection