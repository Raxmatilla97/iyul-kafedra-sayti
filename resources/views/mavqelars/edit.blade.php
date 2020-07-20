@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mavqelar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mavqelar, ['route' => ['mavqelars.update', $mavqelar->id], 'method' => 'patch']) !!}

                        @include('mavqelars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection