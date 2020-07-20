
<br>
<br>

<div class="form-group col-sm-6">
    {!! Form::label('title', "Gallereyaga kiritiluvchi suratning nomlanishi:") !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "Surat manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-target']) !!}
</div>

<!-- Narx Field -->
<div class="form-group col-sm-6">
    {!! Form::label('narx', "Narxlanishi: (agar surat narxi bo'lmasa bo'sh qoldirilishi mumkin)") !!}
    {!! Form::text('narx', null, ['class' => 'form-control']) !!}
</div>

<!-- Chizilgan Yil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('chizilgan_yil', 'Chizilgan yili:') !!}
    {!! Form::text('chizilgan_yil', null, ['class' => 'form-control']) !!}
</div>


<!-- Addres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addres', 'Manzil') !!}
    {!! Form::text('addres', null, ['class' => 'form-control']) !!}
</div>

<!-- Tell Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tell', 'Telefon:') !!}
    {!! Form::text('tell', null, ['class' => 'form-control']) !!}
</div>


<div class="col-md-5" style="margin-top: 20px">
    <h3 class="mt-8" style="margin-left: 10%;">Gallereyaga kiritiluvchi surat ko'rinishi</h3>
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

<!-- Tell Field -->
<div class="form-group col-sm-6">
    {!! Form::label('familya_ism', 'Rassomning ism familyasi:') !!}
    {!! Form::text('familya_ism', null, ['class' => 'form-control']) !!}
</div>



    <div class="form-group col-sm-6" >



        <div class="tab-pane" id="tabs-alpha-profile" role="tabpanel" aria-expanded="false"><b>Yangilik bo'limini tanlang.</b>


            {!! Form::select('category_id', $category, null, ['class' => 'form-control']) !!}



        </div>
    </div>

<div class="container col-sm-12" >
    <h3 class="text-center">Qolgan suratlarni yoki shu suratga qo'shimcha ma'lumotlarni kiritish joyi</h3>
    <hr>

      <div class="col-sm-12 " style=" margin: auto;">
        @include('addons.description')

  </div>
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    <br>
    <br>
    <br>
    {!! Form::submit('Gallereyaga saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('gallereyas.index') }}" class="btn btn-danger">Yopish</a>
</div>


@include('addons.file-manager')
@include('addons.slug')
