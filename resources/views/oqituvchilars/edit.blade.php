@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Oqituvchilar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($oqituvchilar, ['route' => ['oqituvchilars.update', $oqituvchilar->id], 'method' => 'patch']) !!}

                        @include('oqituvchilars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection