@section('title','تواصل معنا ')
@extends('layouts.app')

@section('content')




<h4 class="">ارسال ايميل</h4>

<div class="card mt-4">
<div class="container pt-3">
  <form  action="{{route('sendmails.store')}}" method="post">
    @csrf

    <div class="form-group">
      <label for="title">عنوان الرساله</label>
      <input type="text" name="title" class="form-control" >
    </div>

    <div class="form-group">
      <label for="content">محتوى الرساله</label>
      <textarea name="content"  class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">ارسال</button>
    </div>
  </form>
</div>


</div>
@endsection
