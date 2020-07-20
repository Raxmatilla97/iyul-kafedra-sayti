<br>
<br>
<div class="form-group col-sm-6">
    {!! Form::label('title', "Yangilikning qisqa va aniq holda bo'lgan nomlanishi:") !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "Yangilik manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug-target']) !!}
</div>

<div class="col-md-8">
    <h3 class="mt-4" style="margin-left: 50%;">Yangilikning asosiy suratini yuklash</h3>
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

<div class="form-group col-sm-12" style="margin-top: 30px">
 
    <div class="orm-group col-sm-6" >
    
      
      
        <div class="tab-pane" id="tabs-alpha-profile" role="tabpanel" aria-expanded="false">Yangilik bo'limini tanlang.
                 
               
          {!! Form::select('cate_id', $category, null, ['class' => 'form-control']) !!}
      
      
      
        </div>
    </div>
      
<div class="orm-group col-sm-6" >
    
      <div class="col-sm-12 " style=" margin: auto;">
    {!! Form::label('smal_desc', "O'ta qisqa mazmun: (bu yerga uzunligi 100 ta harfdan oshmaydigan qisqa gap bo'lagi yoziladi.)") !!}
    {!! Form::textarea('smal_desc', null, ['class' => 'form-control', 'rows' => 5,]) !!}
</div>
</div>

</div>


      {{-- Yangilikni kiritgan odamni user id --}}
      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">



<div class="container col-sm-12" >
    <h3 class="text-center">Asosiy yangilik qismi</h3>
    <hr>
   
      <div class="col-sm-12 " style=" margin: auto;">
        @include('addons.description')
  
  </div>
</div>

<!-- Active Field -->
<div class="form-group col-sm-6 " style="margin-top: 30px;">
    {!! Form::label('active', "Activlik holati: Agar yangilik hali to'liq bo'lmagan bo'lsa, uni chop etmay turish mumkin.") !!}
    <label class="checkbox-inline">
        {!! Form::hidden('active', 0) !!}
        {!! Form::checkbox('active', '1', null) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <br><br><br><br>
    {!! Form::submit('Saqlash', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('yangiliklars.index') }}" class="btn btn-danger">Yopish</a>
</div>
@include('addons.file-manager')
@include('addons.slug')

