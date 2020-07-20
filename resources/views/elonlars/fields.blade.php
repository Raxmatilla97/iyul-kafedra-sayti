
<br>
<br>

<div class="form-group col-sm-6">
    {!! Form::label('title', "E'lon nomlanishi:") !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "E'lon manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-target']) !!}
</div>

<div class="col-md-5" style="margin-top: 20px">
    <h3 class="mt-8" style="margin-left: 10%;">E'lonning muqova suratini yuklash</h3>
    <div class="input-group">
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
          <i class="fa fa-picture-o"></i> Suratni yuklab oling
        </a>
      </span>
      {!! Form::text('image', null, ['class' => 'form-control', 'id' => 'thumbnail']) !!}
    </div>
   
  </div>

  <div style="margin-top: 30px" class="col-md-1"> <div class="holder3" id="holder"></div></div>
    <style>
      .holder3{
        height: 100px;
      }
    </style>


      {{-- Yangilikni kiritgan odamni user id --}}
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

   
      <div class="orm-group col-sm-6" >
    
        <div class="col-sm-12 " style=" margin: auto;">
      {!! Form::label('smal_desc', "O'ta qisqa mazmun: (bu yerga uzunligi 100 ta harfdan oshmaydigan qisqa gap bo'lagi yoziladi.)") !!}
      {!! Form::textarea('smal_desc', null, ['class' => 'form-control', 'rows' => 5,]) !!}
  </div>
  </div>
  
  </div>

<div class="container col-sm-12" >
    <h3 class="text-center">E'lonning asosiy qismi</h3>
    <hr>
   
      <div class="col-sm-12 " style=" margin: auto;">
        @include('addons.description')
  
  </div>
</div>



      {{-- Yangilikni kiritgan odamni user id --}}
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

<!-- Submit Field -->
<div class="form-group col-sm-12">
  <br>
  <br>
    {!! Form::submit('Saqlash', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('elonlars.index') }}" class="btn btn-default">Yopish</a>
</div>


@include('addons.file-manager')
@include('addons.slug')