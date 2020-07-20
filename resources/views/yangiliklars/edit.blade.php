@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Yangiliklar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($yangiliklar, ['route' => ['yangiliklars.update', $yangiliklar->id], 'method' => 'patch']) !!}

                        @include('yangiliklars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection