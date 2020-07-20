
<br>
<br>

<div class="form-group col-sm-6">
    {!! Form::label('title', "Ilmiy ish nomlanishi:") !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "E'lon manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-target']) !!}
</div>


<div class="col-md-5" style="margin-top: 20px">
    <h3 class="mt-8" style="margin-left: 10%;">Ilmiy ishning muqova suratini yuklash</h3>
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



      <div class="container col-sm-12" >
        <h3 class="text-center">Ilmiy ishning asosiy qismi</h3>
        <hr>
       
          <div class="col-sm-12 " style=" margin: auto;">
            @include('addons.content')
      
      </div>
    </div>
    
    


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <br>
    <br>
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('ilmiyIshlars.index') }}" class="btn btn-danger">Yopish</a>
</div>

@include('addons.file-manager')
@include('addons.slug')