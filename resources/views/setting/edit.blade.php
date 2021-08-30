@section('title','اعدادات الموقع ')
@extends('layouts.app')

@section('content')

<h4 class="">تعديل ثيم</h4>


<div class="card mt-4">
<div class="container pt-3">

<form  action="{{route('settings.update',$setting)}}" method="post" enctype="multipart/form-data">
  @method('PATCH')
  @csrf


  <div class="form-group">
    <label for="img">صوره الصفحه الرئيسيه</label>
    <input type="file" name="img" class="form-control" @isset($setting) value="{{$setting->img}}" @endisset>
  @isset($setting)
    <img src="/web-img/{{$setting->img}}" alt="" style="width: 46px;">
  @endisset
  </div>

  <div class="form-group">
    <label for="content">المحتوى</label>
    <textarea name="content" rows="8" cols="80" class="form-control">@isset($setting) {{$setting->content}} @endisset</textarea>

  </div>

  <div class="form-group">
    <button class="btn btn-outline-primary">حفظ</button>
  </div>

</form>

</div>
</div>


@endsection
