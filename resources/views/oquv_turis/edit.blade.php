@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Oquv Turi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($oquvTuri, ['route' => ['oquvTuris.update', $oquvTuri->id], 'method' => 'patch']) !!}

                        @include('oquv_turis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection