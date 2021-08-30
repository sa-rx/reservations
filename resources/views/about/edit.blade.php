@extends('layouts.app')
@section('title',' عن المغسله ')

@section('content')




<h4 class="">تعديل بيانات صفحه عن المغسله</h4>

  <div class="card">
  <div class="container pt-3">
  <form  action="{{route('abouts.update',$about)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')




  <div class="row">



        <div class="form-group col-md-6">
          <label for="content">المحتوى</label>
          <textarea name="content" class="form-control">@isset($about) {{$about->content}} @endisset</textarea>
        </div>


    <div class="form-group col-md-6">
      <label for="time">اوقات العمل</label>
    <textarea type="text" name="time" class="form-control" > @isset($about) {{$about->time}} @endisset </textarea>
    </div>

    <div class="form-group col-md-6">
      <label for="address">العنوان</label>
      <input type="text" name="address" class="form-control" @isset($about) value="{{$about->address}}" @endisset>
    </div>

    <div class="form-group col-md-6">
      <label for="number">رقم الجوال 1</label>
      <input type="text" name="number" class="form-control" @isset($about) value="{{$about->number}}" @endisset>
    </div>

    <div class="form-group col-md-6">
      <label for="number2">رقم الجوال 2</label>
      <input type="text" name="number2" class="form-control" @isset($about) value="{{$about->number2}}" @endisset>
    </div>


    <div class="form-group col-md-6">
      <label for="snap">السناب 1</label>
      <input type="text" name="snap" class="form-control" @isset($about) value="{{$about->snap}}" @endisset>
    </div>

    <div class="form-group col-md-6">
      <label for="snap2">السناب 2</label>
      <input type="text" name="snap2" class="form-control" @isset($about) value="{{$about->snap2}}" @endisset>
    </div>

    <div class="form-group col-md-6">
      <label for="inst">الانستا 1</label>
      <input type="text" name="inst" class="form-control" @isset($about) value="{{$about->inst}}" @endisset>
    </div>

    <div class="form-group col-md-6">
      <label for="inst2">الانستا 2</label>
      <input type="text" name="inst2" class="form-control" @isset($about) value="{{$about->inst2}}" @endisset>
    </div>
    <div class="form-group col-md-6">
      <label for="location">موقع المغسله</label>
      <input type="text" name="location" class="form-control" @isset($about) value="{{$about->location}}" @endisset>
    </div>


  </div>


    <div class="form-group">
      <button class="btn btn-primary">حفظ</button>
    </div>
  </form>


</div>
</div>
@endsection
