@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Permission User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($permissionUser, ['route' => ['permissionUsers.update', $permissionUser->id], 'method' => 'patch']) !!}

                        @include('permission_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection