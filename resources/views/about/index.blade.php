@extends('layouts.app')

@section('title','عن المغسله')

@section('content')





    @forelse($abouts as $about)
  <div class="jumbotron border bg-dark " >

    <h5 class="text-center text-light">{!! nl2br( $about->content )!!}</h5>
    <h6 class="text-center text-light" >{!! nl2br( $about->time )!!}</h6>

  <br><br><br>
    <div class="row">


      <div class="col-md-3">
        <a href="#demo" data-toggle="collapse">
          <h1  class="text-center  text-light">  <i class="fas fa-phone-square"></i>  </h1>
        </a>

        <div id="demo" class="collapse">
          <p class="text-center  text-light" >{{$about->number}}  </p>
          <p class="text-center text-light" >  {{$about->number2}}</p>
        </div>
      </div>



      <div class="col-md-3">
        <a href="#demo" data-toggle="collapse">
          <h1 class="text-center  text-light">    <i class="fab fa-instagram"></i>   </h1>
        </a>

        <div id="demo" class="collapse">
          <p class="text-center text-light"><a  class="text-center text-light" href="https://www.instagram.com/{{$about->inst}}">  {{$about->inst}}   </a> </p>
          <p class="text-center text-light"><a  class="text-center text-light" href="https://www.instagram.com/{{$about->inst2}}"> {{$about->inst2}}  </a></p>
        </div>
      </div>


      <div class="col-md-3">
        <a href="#demo" data-toggle="collapse">
       <h1 class="text-center  text-light">    <i class="fab fa-snapchat"></i>    </h1>
        </a>

        <div id="demo" class="collapse">
          <p class="text-center text-light"><a class="text-center text-light"  href="http://story.snapchat.com/u/{{$about->snap}}"> {{$about->snap}}</a></p>
          <p class="text-center text-light">  <a class="text-center text-light"  href="http://story.snapchat.com/u/{{$about->snap2}}"> {{$about->snap2}}</a></p>
        </div>
      </div>


      <div class="col-sm-3">
           <a href="#demo" data-toggle="collapse">
           <h1 class="text-center  text-light">     <i class="fas fa-map-marker-alt"></i>     </h1>
           </a>

           <div id="demo" class="collapse">
             <p class="text-center text-light">{{$about->address}}</p>
             <p class="text-center text-light"><a  class="text-center text-light" href="{{$about->location}}">موقع المغسله</a></p>
           </div>
         </div>

      <div class=" ">
         <a class="btn btn-primary" href="{{route('abouts.edit',$about)}}">تعديل  <i class="fas fa-edit"></i></a>
      </div>

    </div>



  </div>
  @empty
  <p>لا يوجد</p>
  @endforelse









@endsection
