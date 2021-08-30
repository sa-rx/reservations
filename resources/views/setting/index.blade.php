@extends('layouts.app')

@section('title','اعدادات الموقع')

@section('content')


  @forelse($settings as $setting)
  <div class="card mb-3 bg-dark text-light ">
  <div class="row no-gutters">
  <div class="col-md-4">
  <img src="/web-img/{{$setting->img}}" class="card-img" alt="...">
  </div>
  <div class="col-md-8">
  <div class="card-body ">
    <h5  class="  "> {!! nl2br( $setting->content )!!} </h5>
    <br>
      <a href="{{route('settings.edit',$setting)}}" class="btn btn-primary">تعديل  <i class="fas fa-edit"></i></a>

  </div>
  </div>
  </div>
  </div>
  @empty
  <p>لا توجد خدمات</p>
  @endforelse








@endsection
