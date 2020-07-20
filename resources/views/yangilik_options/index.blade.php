@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Yangilik sozlami</h1>
        <h1 class="pull-right">
            <br>
            @if ( $yangilikOptions->count() < 1)             
           
            <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('yangilikOptions.create') }}">Yangi sozlam qo'shish</a>
            @endif
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
     
        @include('flash::message')
        @if ( $yangilikOptions->count() === 1)         
        <div class="alert alert-info alert-dismissible ">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-info"></i> DIQQAT!</h4>
            Asosiy sahifada bunday sozlam 1 dona turushi kerakligi uchun siz boshqa sozlam qo'sha olmaysiz!. Mavjud sozlamni tahrirlang yoki o'chirib boshqa yarating.
          </div>
          @endif
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                 
                    @include('yangilik_options.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

