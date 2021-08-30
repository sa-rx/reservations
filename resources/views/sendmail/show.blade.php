@section('title',$sendmail->name)
@extends('layouts.app')

@section('content')





<div class="jumbotron  text-dark bg-light border">
  <h5 class="card-title"> عنوان الرساله  :  {{$sendmail->title}}</h5>

  محتوى الرساله  :
  <p class="card-title">  {!! nl2br( $sendmail->content )!!} </p>

</div>


@endsection
