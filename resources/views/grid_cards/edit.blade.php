@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Grid Card
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($gridCard, ['route' => ['gridCards.update', $gridCard->id], 'method' => 'patch']) !!}

                        @include('grid_cards.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection