@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Hisoblagich banneri sozlamlari</h1>
        <h1 class="pull-right">
            <br>
            @if ( $counterSettings->count() < 4)     
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('counterSettings.create') }}">Yangi qo'shish</a>
           @endif
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if ( $counterSettings->count() === 4)         
                <div class="alert alert-info alert-dismissible ">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-info"></i> DIQQAT!</h4>
                    Asosiy sahifada bunday bo'laklar 4 ta joylash kerak bo'lganligi uchun siz boshqa bunday bo'lak joylay olmaysiz.
                  </div>
                  @endif
                    @include('counter_settings.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

