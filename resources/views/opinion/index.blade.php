@section('title',' اراء العملاء ')
@extends('layouts.app')

@section('content')

<div class=" ">
  <h4>الأراء</h4>


  @foreach( $opinions as $opinion )
  <div class="card  mb-4 mt-3">

   <div class="card-header ">
         <p >{{$opinion->name}}</p>
    </div>

   <div class="card-body ">
        <h5>{!! nl2br( $opinion->content )!!}</h5>
    </div>

    <div class="card-footer">
      @auth
     @if(Auth::user()->hasRole('Admin') || $opinion->user_id == Auth::user()->id)
    <form action="{{route('opinions.destroy',$opinion)}}" method="post">
      @csrf
      @method('DELETE')
      <button class="btn btn-outline-danger btn-sm">حذف <i class="fas fa-trash-alt"></i></button>
    </form>
    @endif
    @endauth
     </div>


    </div>

   @endforeach
  </div>




@endsection
