@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fanlar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fanlar, ['route' => ['fanlars.update', $fanlar->id], 'method' => 'patch']) !!}

                        @include('fanlars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection