@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Yonalish Kodlari
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($yonalishKodlari, ['route' => ['yonalishKodlaris.update', $yonalishKodlari->id], 'method' => 'patch']) !!}

                        @include('yonalish_kodlaris.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection