@section('title',' اعدادات الموقع ')
@extends('layouts.app')

@section('content')


<div class="card mt-4">
<h4 class="card-header">انشاء ثيم جديد</h4>
<div class="card-body">
  <form  action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
    @csrf





    <div class="form-group">
      <label for="img">صورة الصفحه الرئسيه</label>
      <input type="file" name="img" class="form-control">
    </div>


    <div class="form-group">
      <label for="content">رايك</label>
      <textarea name="content" rows="8" cols="80" class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">حفظ</button>
    </div>
  </form>
</div>


</div>
@endsection
