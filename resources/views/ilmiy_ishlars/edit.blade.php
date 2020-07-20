@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ilmiy Ishlar
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ilmiyIshlar, ['route' => ['ilmiyIshlars.update', $ilmiyIshlar->id], 'method' => 'patch']) !!}

                        @include('ilmiy_ishlars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection