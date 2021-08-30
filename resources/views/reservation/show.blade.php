@section('title',$reservation->name)
@extends('layouts.app')

@section('content')

<div class="jumbotron  bg-light text-dark  border">
  <h4  value="{{$reservation->service_id}}" class="">{{$reservation->service->service_name}}</h4>

<div class="row">

  <div class="col-md-6">
        <h5 class=""> الاسم :  {{$reservation->name}}</h5>
  </div>

  <div class="col-md-6">
      <p class=""> اسم السياره :  {{$reservation->car_name}}</p>
  </div>

  <div class="col-md-6">
      <p class="t">  رقم الجوال :  {{$reservation->number}}</p>
  </div>

  <div class="col-md-6">
    <p class="">موعد الحجز : {{$reservation->time}}</p>
  </div>


    <div class="col-md-6">
      <p class="">  وقت الحجز :  {{$reservation->created_at}}</p>
    </div>

  <div class="col-md-6">
      <p class=""> ملاحظات : {{$reservation->content }}</p>
  </div>



</div>
</div>









@endsection
