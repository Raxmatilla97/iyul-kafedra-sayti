@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Talabalar Guruhlari
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($talabalarGuruhlari, ['route' => ['talabalarGuruhlaris.update', $talabalarGuruhlari->id], 'method' => 'patch']) !!}

                        @include('talabalar_guruhlaris.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection