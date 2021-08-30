@section('title',' اراء العملاء ')
@extends('layouts.app')

@section('content')


<h4 class="">تعديل </h4>


<div class="card mt-4">
<div class="card-body">

<form  action="{{route('tools.update',$tool)}}" method="post" enctype="multipart/form-data">
  @method('PATCH')
  @csrf


  <div class="form-group">
    <label for="img">صوره الاداه</label>
    <input type="file" name="img" class="form-control" @isset($tool) value="{{$tool->img}}" @endisset>
  @isset($tool)
    <img src="/tool-img/{{$tool->img}}" alt="" style="width: 46px;">
  @endisset
  </div>


  <div class="form-group">
    <label for="title">اسم الاداه</label>
    <input type="text" name="title" class="form-control" @isset($tool) value="{{$tool->title}}" @endisset>
  </div>

  <div class="form-group">
    <label for="content">محتوى الاداه</label>
    <textarea name="content"  class="form-control" >@isset($tool) {{$tool->content}} @endisset</textarea>
  </div>

  <div class="form-group">
    <button class="btn btn-primary">حفظ</button>
  </div>

</form>
</div>
</div>



@endsection
