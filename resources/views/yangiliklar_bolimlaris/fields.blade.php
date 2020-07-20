<div class="form-group col-sm-6">
    {!! Form::label('title', "Yangilik bo'limining nomlanishi:") !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'slug-source']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', "Yangilik bo'limi manzili: O'zgartirish shart emas avtomatik kiritiladi!") !!}
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
      <input id="thumbnail" class="form-control" type="text" name="img">
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('yangiliklarBolimlaris.index') }}" class="btn btn-default">Cancel</a>
</div>
@include('addons.file-manager')
@include('addons.slug')

