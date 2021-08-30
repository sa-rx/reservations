@extends('layouts.app')

@section('title',__('admin'))

@section('content')





<div class="row">
  @forelse($services as $service)
  <div class="col-md-4">
    <div class="card">
      <div class="custom-card-image" style="background-image: url(/uplaod/{{$service->url}}); height: 212px; background-size: cover;  background-position: center;"> </div>

      <h5  class="card-header bg-secondary "> <a class="text-light" href="{{route('services.show',$service)}}">{{$service->service_name}}</a> </h5>
      <div class="card-body bg-dark">
        <p class="text-light">{{$service->price}}</p>

        <a href="{{route('services.edit',$service)}}" class="btn btn-primary">تعديل</a>
        <form method="post" action="{{route('services.destroy',$service)}}" style="display:inline-block">
          @method('DELETE')
          @csrf
          <button class="btn btn-danger">حذف</button>
        </form>
      </div>

    </div>

  </div>
  @empty
  <p>لا توجد خدمات</p>
  @endforelse

</div>


@endsection
