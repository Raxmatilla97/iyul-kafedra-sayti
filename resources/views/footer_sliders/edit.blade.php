@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Footer Slider
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($footerSlider, ['route' => ['footerSliders.update', $footerSlider->id], 'method' => 'patch']) !!}

                        @include('footer_sliders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection