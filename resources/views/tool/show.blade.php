@section('title',$tool->title)
@extends('layouts.app')

@section('content')



  <div class="card mb-3">
  <div class="row no-gutters">
  <div class="col-md-4">
  <img src="{{$tool->img_url}}" class="card-img" alt="...">
  </div>
  <div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title">{{$tool->title}}</h5>
    <p>{!! nl2br( $tool->content )!!}</p>
  </div>
  </div>
  </div>
  </div>


@endsection
