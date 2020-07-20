<!-- Sarlavha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sarlavha', 'Sarlavha:') !!}
    {!! Form::text('sarlavha', null, ['class' => 'form-control']) !!}
</div>

<!-- Kichik Sarlavha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kichik_sarlavha', 'Kichik Sarlavha:') !!}
    {!! Form::text('kichik_sarlavha', null, ['class' => 'form-control']) !!}
</div>

<!-- Gap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gap', 'Gap:') !!}
    {!! Form::textarea('gap', null, ['class' => 'form-control', 'rows' => '5' ]) !!}
</div>

<!-- Button 1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_1', "Birinchi tugma manzili: namuna->(http://saytmanzil.uz/bironmanzilgaotish) Agar bunday manzil bo'lmasa bo'sh qoldiringiz mumkin.") !!}
    {!! Form::text('button_1', null, ['class' => 'form-control']) !!}
</div>

<!-- Button 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_2', 'Button 2:') !!}
    {!! Form::text('button_2', null, ['class' => 'form-control']) !!}
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
    <br>
    <br>
    {!! Form::submit('Slaydni saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('sliders.index') }}" class="btn btn-danger">Yopish</a>
</div>
@include('addons.file-manager')