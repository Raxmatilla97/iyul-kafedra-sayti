@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Elonlar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($elonlar, ['route' => ['elonlars.update', $elonlar->id], 'method' => 'patch']) !!}

                        @include('elonlars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection