@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Firstbanner
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('firstbanners.show_fields')
                    <a href="{{ route('firstbanners.index') }}" class="btn btn-default">Orqaga</a>
                </div>
            </div>
        </div>
    </div>
@endsection
