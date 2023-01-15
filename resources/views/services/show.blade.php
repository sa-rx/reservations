@section('title',$service->service_name)
@extends('layouts.app')

@section('content')








    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="{{$service->img_url}}" class="card-img" alt="...">
          </div>

          <div class="col-md-8">
          <div class="card-body">

            <h5 class="card-title">{{$service->service_name}}</h5>
            <p>{!! nl2br( $service->conten )!!}</p>

        <hr class="my-4">

        <h3>الادوات المستعمله</h3>
          @foreach($tools as $id => $title)
          <a href="{{route('tools.show',$id)}}"> <h5>{{ $title }}</h5> </a>
          @endforeach

          @if(isset($service->offer_price))
          <b class="text-success">{{$service->offer_price}} ريال</b>
          <p class="text-danger"><s>{{$service->price}}ريال </s></p>
          @else
          <p class="">{{$service->price}} ريال</p>
          @endif

          <a href="{{route('reservations.create')}}" class="btn btn-primary mb-4 btn-lg"> للحجز </a>

          </div>
          </div>
      </div>
      </div>








      <div id="commentForm" class="" >




          <form action="{{route('comments.store')}}" method="post">
            @csrf
            <input type="hidden" name="service_id" value="{{$service->id}}">

            @Auth
            @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('User'))
              <input type="hidden" value="{{Auth::user()->name}}" name="name" class="form-control">
              @endauth
            @else

            <div class="form-group">
              <label for="name">الاسم</label>
              <input type="text" name="name" class="form-control">
            </div>
            @endif

            <div class="form-group">
              <textarea placeholder="اكتب تعليقك هنا" class="form-control" name="conten" id="conten" ></textarea>
            </div>

            <div class="form-group">
              <button class="btn btn-primary">نشر تعليقك</button>
            </div>
          </form>

        </div>








<div class=" ">

  <h3>التعليقات</h3>

  @foreach($service->comments as $comment)

  <div class="card mb-4 mt-3 ">

   <div class="card-header">
        <h6 >{{$comment->name}}</h6>
    </div>

   <div class="card-body">
        <h4> {{$comment->conten}} </h4>
    </div>

    <div class="card-footer">
      @auth
     @if(Auth::user()->hasRole('Admin') || $comment->user_id == Auth::user()->id)
    <form action="{{route('comments.destroy',$comment)}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-outline-danger btn-sm">حذف<i class="fas fa-trash-alt"></i></button>
    </form>
    @endif
    @endauth
    </div>

    </div>
  @endforeach
  </div>







</div>

@endsection
