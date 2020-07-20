@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ilmiy Ishlar
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ilmiy_ishlars.show_fields')
                    <a href="{{ route('ilmiyIshlars.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
