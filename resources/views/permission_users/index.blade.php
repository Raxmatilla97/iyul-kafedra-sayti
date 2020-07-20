@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">A'zolarga huquqlar berish sahifasi</h1>
        <h1 class="pull-right">
            <br>
           <a class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('permissionUsers.create') }}">Huquq berish</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('permission_users.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

