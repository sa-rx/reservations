@section('title',$about->time)
@extends('layouts.app')

@section('content')


<div class="jumbotron   ">

  <p class="text-center">      {!! nl2br( $about->content )!!}</p>
  <p class="text-center" >  {!! nl2br( $about->time )!!}</p>
  <p class="text-center">{{$about->address}}</p>
  <p class="text-center" >{{$about->number}}</p>
  <p class="text-center" >{{$about->number2}}</p>
  <a  class="text-center" href="https://www.instagram.com/{{$about->inst}}">inst</a>
  <a  class="text-center" href="https://www.instagram.com/{{$about->inst2}}">inst</a>
  <a class="text-center"  href="http://story.snapchat.com/u/{{$about->snap}}">snap</a>
  <a class="text-center"  href="http://story.snapchat.com/u/{{$about->snap2}}">snap</a>
  <a  class="text-center" href="{{$about->location}}">موقع المغسله</a>

</div>

@endsection
