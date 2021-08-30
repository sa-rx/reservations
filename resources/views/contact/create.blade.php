@section('title','تواصل معنا ')
@extends('layouts.app')

@section('content')


<div class="jumbotron border" style="background-color: white;">

  <h5 class="text-center">  {!! nl2br( $about->content )!!}</h5>
  <h6 class="text-center" >{!! nl2br( $about->time )!!}</h6>

<br><br><br>
  <div class="row">


    <div class="col-md-3">
      <a href="#demo" data-toggle="collapse">
        <h1  class="text-center  text-secondary"><button class="btn  btn-outline-secondary btn-lg">   <i class="fas fa-phone-square fa-2x"></i> </button>  </h1>
      </a>

      <div id="demo" class="collapse">
        <p class="text-center" >{{$about->number}}  </p>
        <p class="text-center" >  {{$about->number2}}</p>
      </div>
    </div>



    <div class="col-md-3">
      <a href="#demo" data-toggle="collapse">
        <h1 class="text-center  text-secondary">  <button class="btn  btn-outline-secondary btn-lg">  <i class="fab fa-instagram fa-2x"></i>   </button> </h1>
      </a>

      <div id="demo" class="collapse">
        <p class="text-center"><a  class="text-center" href="https://www.instagram.com/{{$about->inst}}">  {{$about->inst}}   </a> </p>
        <p class="text-center"><a  class="text-center" href="https://www.instagram.com/{{$about->inst2}}"> {{$about->inst2}}  </a></p>
      </div>
    </div>


    <div class="col-md-3">
      <a href="#demo" data-toggle="collapse">
     <h1 class="text-center  text-secondary">  <button class="btn  btn-outline-secondary btn-lg">  <i class="fab fa-snapchat fa-2x"></i>  </button>   </h1>
      </a>

      <div id="demo" class="collapse">
        <p class="text-center"><a class="text-center"  href="http://story.snapchat.com/u/{{$about->snap}}"> {{$about->snap}}</a></p>
        <p class="text-center">  <a class="text-center"  href="http://story.snapchat.com/u/{{$about->snap2}}"> {{$about->snap2}}</a></p>
      </div>
    </div>


    <div class="col-sm-3">
         <a href="#demo" data-toggle="collapse">
         <h1 class="text-center  text-secondary">  <button class="btn  btn-outline-secondary btn-lg">   <i class="fas fa-map-marker-alt fa-2x"></i>   </button>   </h1>
         </a>

         <div id="demo" class="collapse">
           <p class="text-center">{{$about->address}}</p>
           <p class="text-center"><a  class="text-center" href="{{$about->location}}">موقع المغسله</a></p>
         </div>
       </div>


  </div>



</div>



<p>
  أو قم بملء نموذج التواصل أدناه وسيتم التواصل معك في غضون 24 ساعة
</p>




<div class="card mt-4">
<div class="container pt-3">

  <form  action="{{route('contacts.store')}}" method="post">
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
      <label for="title">عنوان الرساله</label>
      <input type="text" name="title" class="form-control" >
    </div>
    <div class="form-group">
      <label for="content">محتوى الرساله</label>
      <textarea name="content"  class="form-control"></textarea>
    </div>

    <div class="form-group">
      <button class="btn btn-primary">ارسال</button>
    </div>
  </form>
</div>


</div>
@endsection
