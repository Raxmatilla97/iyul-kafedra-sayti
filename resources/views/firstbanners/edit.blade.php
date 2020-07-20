@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Firstbanner
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($firstbanner, ['route' => ['firstbanners.update', $firstbanner->id], 'method' => 'patch']) !!}

                        @include('firstbanners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection