@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Kafedrada o'qitiladigan fanlar</h1>
        <h1 class="pull-right">
            <br>
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('fanlars.create') }}">Yangi fan qo'shish</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('fanlars.table')
            </div>
        </div>
        <div class="text-center">
  {{  $fanlars->links()  }} 
        </div>
    </div>
@endsection

