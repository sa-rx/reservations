@extends('layouts.app')

@section('title',__('admin'))

@section('content')



<h2>الحجوزات</h2>

<table class="table table-striped table-hover table-dark ">
  <thead  class="table-dark">
    <tr>
      <th scope="col">رقم الحجز</th>
      <th scope="col">الاسم</th>
      <th scope="col">اسم السياره</th>
      <th scope="col">رقم الجوال</th>
      <th scope="col"> نوع الخدمه</th>
      <th scope="col">عرض</th>
      <th scope="col">حذف</th>
    </tr>
  </thead>



  <tbody>
    @forelse($reservations as $reservation)
      <tr>
        <td scope="row">{{$reservation->id}}</td>
        <td>{{$reservation->name}}</td>
        <td>{{$reservation->car_name}}</td>
        <td>{{$reservation->number}}</td>
        <td>{{$reservation->service->service_name}}</td>
        <td> <a class="btn btn-primary" href="{{route('reservations.show',$reservation)}}">عرض</a> </td>
        <td>

        <form method="post" action="{{route('reservations.destroy',$reservation)}}">
          @method('DELETE')
          @csrf
          <button onclick="return confirm('هل انت متأكد؟')" class="btn btn-danger" >حذف</button>
        </form>

       </td>
      </tr>

      @empty
<p>لا توجد حجوزات</p>
      @endforelse
        </tbody>
</table>

@endsection
