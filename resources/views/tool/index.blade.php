@extends('layouts.app')

@section('title','الادوات')

@section('content')

<div class="">
  <a href="{{route('tools.create')}}" class="btn btn-primary">اضافة اداة</a>
</div>

<br>

<div class="row">
  @forelse($tools as $tool)
  <div class="col-md-4">

    <div class="card ">

      <div class="custom-card-image" style="background-image: url(/tool-img/{{$tool->img}});  height: 200px;  background-size: cover;    background-position: center;  background-size: contain; background-repeat: no-repeat;  background-position: center;"> </div>

      <div class="card-body  bg-dark">


        <h5  class="card-title "> <a class="text-light" href="{{route('tools.show',$tool)}}">{{$tool->title}}</a> </h5>
        <p class="text-light">{{$tool->content}}</p>

          <a href="{{route('tools.edit',$tool)}}" class="btn btn-primary">تعديل  <i class="fas fa-edit"></i></a>
          <form method="post" action="{{route('tools.destroy',$tool)}}" style="display:inline-block">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">حذف <i class="fas fa-trash-alt"></i></button>
          </form>




      </div>

    </div>

  </div>
  @empty
  <p>لا توجد خدمات</p>
  @endforelse

</div>








@endsection
