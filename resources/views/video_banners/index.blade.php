@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Video Banner joylash qismi</h1>
        <h1 class="pull-right">
            <br>
            @if ( $videoBanners->count() < 1)             
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('videoBanners.create') }}">Yangi video banner joylash</a>
           @endif
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @if ( $videoBanners->count() === 1)         
                <div class="alert alert-info alert-dismissible ">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-info"></i> DIQQAT!</h4>
                    Asosiy sahifada bunday banner 1 dona turushi kerakligi uchun siz boshqa banner qo'sha olmaysiz!. Mavjud bannerni tahrirlang yoki o'chirib boshqa yarating.
                  </div>
                  @endif
                    @include('video_banners.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

