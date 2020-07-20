<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Banner asosiy sarlavhasi:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Small Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('small_desc', 'Qisqa gap:') !!}
    {!! Form::text('small_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Banner uchun kotta gap:') !!}
    {!! Form::textarea('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "Banner tugmasi uchun sayt manzili qo'yish qismi:") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'plaseholder' => "http://sayt-manzili.uz/qandaydur_sahifa_nomi"]) !!}
</div>

<!-- Buttonname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonname', 'Banner Tugmasini nomlanishi:') !!}
    {!! Form::text('buttonname', null, ['class' => 'form-control', 'plaseholder' => "Kirish, Ko'rish, o'qish"]) !!}
</div>

<div class="col-md-8">
    <h3 class="mt-4" style="margin-left: 50%;">Slayderning asosiy suratini yuklash</h3>
    <div class="input-group">
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
          <i class="fa fa-picture-o"></i> Suratni yuklab oling
        </a>
      </span>
      {!! Form::text('image', null, ['class' => 'form-control', 'id' => 'thumbnail']) !!}
    </div>
   
  </div>

  <div class="col-md-4"> <div class="holder3" id="holder"></div></div>
    <style>
      .holder3{
        height: 100px;
      }
    </style>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    <br><br>
    {!! Form::submit('Bannerni saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('firstbanners.index') }}" class="btn btn-danger">Yopish</a>
</div>
@include('addons.file-manager')