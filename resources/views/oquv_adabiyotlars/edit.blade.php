@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Oquv Adabiyotlar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($oquvAdabiyotlar, ['route' => ['oquvAdabiyotlars.update', $oquvAdabiyotlar->id], 'method' => 'patch']) !!}

                        @include('oquv_adabiyotlars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection