@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Counter Setting
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($counterSetting, ['route' => ['counterSettings.update', $counterSetting->id], 'method' => 'patch']) !!}

                        @include('counter_settings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection