<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Banner sarlovhasi:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Small Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('small_desc', "Sarlavhadan so'ng keladigan kichik gap bo'lagi:") !!}
    {!! Form::text('small_desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->

<div class="col-md-5" style="margin-top: 20px">
    <h3 class="mt-8" style="margin-left: 10%;">Banner suratini yuklash</h3>
    <div class="input-group">
      <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary text-white">
          <i class="fa fa-picture-o"></i> Suratni yuklab oling
        </a>
      </span>
      {!! Form::text('image', null, ['class' => 'form-control', 'id' => 'thumbnail']) !!}
    </div>
   
  </div>


  <div class="col-md-4"> <div class="holder3" id="holder"> @if ( isset($image))
    <img class="holder3" src="{{ $image }}">

  @endif</div></div>

    <style>
      .holder3{
        height: 100px;
      }
    </style>

<br>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', 'Youtube Video manzili:') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('videoBanners.index') }}" class="btn btn-danger">Yopish</a>
</div>
@include('addons.file-manager')