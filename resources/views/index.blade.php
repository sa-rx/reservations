@extends('layouts.app')
@section('title', 'الصفحه الرئسيه')

@section('content')


<div class="jumbotron  text-white " style="background-image: url({{$setting->img_url}}); text-align: center;  background-size: cover;  background-position: center;">
  <h1 class="display-4 text-center">{{config('app.name', 'Laravel') }}</h1>
  <p class="  lead text-center">{!! nl2br( $setting->content )!!}</p>
  <a href="{{route('reservations.create')}}" class="btn btn-primary mb-4 btn-lg "> للحجز </a>
</div>





<h3>خدماتنا</h3>
<hr>
<div class="row">
  @forelse($services as $service)
  <div class="col-md-4">
    <div class="card mb-4 mt-3 ">
        <div class="custom-card-image" style="background-image: url({{$service->img_url}}); height: 200px;  background-size: cover;    background-position: center;  background-size: contain; background-repeat: no-repeat;  background-position: center;"> </div>
      <div class="card-body ">
        <h5 class="card-title "> {{$service->service_name}} </h5>

        @if(isset($service->offer_price))
        <b class="text-success">{{$service->offer_price}} ريال</b>
        <p class="text-danger"><s>{{$service->price}}ريال </s></p>
        @else
        <p class="">{{$service->price}} ريال</p>
        @endif

        <a class="btn btn-primary" href="{{route('services.show',$service)}}">عرض</a>
      </div>

    </div>

  </div>
  @empty
  <p>لا توجد خدمات</p>
  @endforelse
</div>



<br>
<br>
<h3>الادوات</h3>
<hr>
<div class="row ">
  @forelse($tools as $tool)
  <div class="col-md-4">
    <div class="card mb-4 mt-3 text-center">
      <div class="custom-card-image" style="background-image: url({{$tool->img_url}}); height: 200px;  background-size: cover;    background-position: center;  background-size: contain; background-repeat: no-repeat;  background-position: center;"> </div>


      <div class="card-body ">
        <h5  class="card-title  "> <a class="" href="{{route('tools.show',$tool)}}">{{$tool->title}}</a> </h5>

      </div>

    </div>

  </div>
  @empty
  <p>لا توجد ادوات</p>
  @endforelse

</div>

@endsection
