@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Talabalar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($talabalar, ['route' => ['talabalars.update', $talabalar->id], 'method' => 'patch']) !!}

                        @include('talabalars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection