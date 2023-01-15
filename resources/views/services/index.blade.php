@extends('layouts.app')

@section('title','الخدمات ')

@section('content')
<div class="container">
  <a href="{{route('services.create')}}" class="btn btn-primary mb-4 btn-lg"> إضافة خدمه </a>
</div>


<div class="row">
  @forelse($services as $service)
  <div class="col-md-4">



    <div class="card mb-4 mt-3 ">
      <div class="custom-card-image" style="background-image: url({{$service->img_url}}); height: 200px;  background-size: cover;    background-position: center;  background-size: contain; background-repeat: no-repeat;  background-position: center;"> </div>


        <div class="card-body bg-dark ">
          <h5 class="card-title "> <a class="text-light" href="{{route('services.show',$service)}}"> {{$service->service_name}} </a></h5>


        @if(isset($service->offer_price))
        <b class="text-success">{{$service->offer_price}} ريال</b>
        <p class="text-danger"><s>{{$service->price}}ريال </s></p>
        @else
        <p class="text-light">{{$service->price}} ريال</p>
        @endif

        <a href="{{route('services.edit',$service)}}" class="btn btn-primary">تعديل  <i class="fas fa-edit"></i></a>
        <form method="post" action="{{route('services.destroy',$service)}}" style="display:inline-block">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">حذف <i class="fas fa-trash-alt"></i></button>
        </form>
      </div>

    </div>




  </div>
  @empty
  <p>لا توجد خدمات</p>
  @endforelse

</div>








@endsection
