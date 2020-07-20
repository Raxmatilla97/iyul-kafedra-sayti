@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Qabul Yili
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($qabulYili, ['route' => ['qabulYilis.update', $qabulYili->id], 'method' => 'patch']) !!}

                        @include('qabul_yilis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection