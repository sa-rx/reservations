@section('title','عن المغسله ')
@extends('layouts.app')

@section('content')


<div class="card mt-4">
<h4 class="card-header">بيانات صفحه عن المغسله</h4>
<div class="card-body">
  <form  action="{{route('abouts.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="content">المحتوى</label>
      <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
    </div>


    <div class="form-group">
      <label for="time">اوقات العمل</label>
      <input type="text" name="time" class="form-control">
    </div>

    <div class="form-group">
      <label for="address">العنوان</label>
      <input type="text" name="address" class="form-control">
    </div>
    <div class="form-group">
      <label for="number">  رقم الجوال 1</label>
      <input type="text" name="number" class="form-control">
    </div>

    <div class="form-group">
      <label for="number2"> رقم الجوال 2  </label>
      <input type="text" name="number" class="form-control">
    </div>


    <div class="form-group">
      <label for="snap"> السناب 1</label>
      <input type="text" name="snap" class="form-control">
    </div>
    <div class="form-group">
      <label for="snap2"> السناب 2</label>
      <input type="text" name="snap" class="form-control">
    </div>

    <div class="form-group">
      <label for="inst">الانستقرام 1</label>
      <input type="text" name="inst" class="form-control">
    </div>
    <div class="form-group">
      <label for="inst2">الانستقرام 2</label>
      <input type="text" name="inst" class="form-control">
    </div>

    <div class="form-group">
      <label for="location">موقع المغسله</label>
      <input type="text" name="location" class="form-control">
    </div>

    <div class="form-group">
      <button class="btn btn-primary">حفظ</button>
    </div>
  </form>


</div>
@endsection
