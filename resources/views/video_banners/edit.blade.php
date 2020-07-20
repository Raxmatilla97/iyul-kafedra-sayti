@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Video Banner
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($videoBanner, ['route' => ['videoBanners.update', $videoBanner->id], 'method' => 'patch']) !!}

                        @include('video_banners.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection