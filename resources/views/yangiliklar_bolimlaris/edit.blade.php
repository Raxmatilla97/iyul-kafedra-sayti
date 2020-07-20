@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Yangiliklar Bolimlari
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($yangiliklarBolimlari, ['route' => ['yangiliklarBolimlaris.update', $yangiliklarBolimlari->id], 'method' => 'patch']) !!}

                        @include('yangiliklar_bolimlaris.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection