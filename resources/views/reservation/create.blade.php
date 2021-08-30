@section('title',' حجز  ')
@extends('layouts.app')

@section('content')

<h4>بيانات الحجز</h4>

<div class="card">
<div class="container pt-3">

  <form  action="{{route('reservations.store')}}" method="post">
    @include('reservation._form')
  </form>
</div>

</div>



@endsection
