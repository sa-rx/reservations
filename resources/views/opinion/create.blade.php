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
        <h5>{{ $opinion->content}}</h5>
    </div>

    <div class="card-footer">
      @auth
     @if(Auth::user()->hasRole('Admin') || $opinion->user_id == Auth::user()->id)
    <form action="{{route('opinions.destroy',$opinion)}}" method="post">
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

  <a class="mt-4" href="{{route('opinions.index')}}">المزيد من الأراء</a>







<div class=" mb-4 mt-3">

  <form  action="{{route('opinions.store')}}" method="post">
    @csrf
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
      <textarea placeholder="اكتب رايك هنا" name="content"  class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">نشر تعليقك</button>
    </div>
  </form>


</div>

@endsection
