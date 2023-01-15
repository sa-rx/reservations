@section('title',' اضافة اداه ')
@extends('layouts.app')

@section('content')

<h4 class="">اداة جديده</h4>

<div class="card mt-4">
<div class="card-body">
  <form  action="{{route('tools.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="img_url">صورة الاداه</label>
      <input type="text" name="img_url" class="form-control">
    </div>


    <div class="form-group">
      <label for="title">اسم الاداه</label>
      <input type="text" name="title" class="form-control">
    </div>


    <div class="form-group">
      <label for="content">محتوى الاداه</label>
      <textarea name="content"  class="form-control"></textarea>
    </div>



    <div class="form-group">
      <button class="btn btn-primary">حفظ</button>
    </div>
  </form>
</div>


</div>
@endsection
