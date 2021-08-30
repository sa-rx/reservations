@section('title',$contact->name)
@extends('layouts.app')

@section('content')

<div class="jumbotron  text-dark bg-light border">
  <h5 class="card-title"> عنوان الرساله  :  {{$contact->title}}</h5>

  محتوى الرساله  :
  <p class="card-title">   {{$contact->content}}</p>

  <p> من  :  {{$contact->name}}</p>
</div>



@endsection
