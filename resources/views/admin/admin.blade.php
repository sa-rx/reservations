@extends('layouts.app')

@section('title',__('admin'))

@section('content')



<div class="jumbotron border bg-dark">



  <div class="container">
  <h4 class="text-light">لوحه التحكم</h4>
  </div>


  <div class="row">

    <div class="col-md-3 mb-4 mt-3">
        <a class="" href="{{route('settings.index')}}">
        <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-cog fa-2x"></i> </button> </h1>
          <p class="text-center text-light"> اعدادات الموقع</p>
        </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
      <a class="" href="{{route('tools.index')}}">
      <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-tools fa-2x"></i>  </h1>
        <p class="text-center text-light">اضافه اداة </p>
      </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
      <a class=""  href="{{route('contacts.index')}}">
      <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-envelope fa-2x"></i> </h1>
        <p class="text-center text-light"> الرسايل</p>
      </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
        <a class=""  href="{{route('abouts.index')}}">
      <h1 class="text-center text-light">  <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-address-card fa-2x"></i> </h1>
        <p class="text-center text-light"> اعدادات من عننا </p>
      </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
        <a class=""  href="{{route('sendmails.create')}}">
      <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-at fa-2x"></i> </h1>
        <p class="text-center text-light">ارسال ايميل </p>
      </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
        <a class="" href="{{('/user')}}">
      <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-users fa-2x"></i> </h1>
        <p class="text-center text-light">المستخدمين </p>
      </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
      <a class="" href="{{route('services.index')}}">
      <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-car fa-2x"></i>  </h1>
        <p class="text-center text-light"> الخدمات </p>
      </a>
    </div>




    <div class="col-md-3 mb-4 mt-3">
        <a class="" href="{{route('reservations.index')}}">
      <h1 class="text-center text-light"> <button class="btn  btn-outline-secondary btn-lg"> <i class="fas fa-server fa-2x"></i> </h1>
        <p class="text-center text-light">الحجوزات </p>
      </a>
    </div>



  </div>



</div>


@endsection
