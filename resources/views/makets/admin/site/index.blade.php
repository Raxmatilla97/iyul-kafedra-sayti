
@extends('makets.admin.app')


{{-- Admin panel eng yuqori qismdagi menyu fragmenti --}}
@section('header-top-menyu')
     
     @include('admin.pages.header-top-menyu')

@endsection

{{-- Admin panel yon traf menyulari --}}
@section('left-navigation')
     
     @include('admin.pages.left-navigation')

@endsection


{{-- Admin panel eng pastki footer qismi --}}
@section('footer')
    
     @include('admin.pages.footer')

@endsection 


{{-- Admin panel eng yuqori qidiruv formasi --}}

@section('ui-search')
    
     @include('admin.pages.ui-search')

@endsection 

{{-- Admin panel o'ng taraf holatni ozgartirish va Dark ko'rinishni berish funksiyasi --}}
@section('customizer')
    
     @include('admin.pages.customizer')

@endsection 