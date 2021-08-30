@section('title',' إضافة خدمه ')
@extends('layouts.app')

@section('content')

<h4>إضافة خدمه</h4>

<div class="card">
<div class="container pt-3">

<form  action="{{route('services.store')}}" method="post" enctype="multipart/form-data">
  @include('services._form',['submitText'=>'حفظ'])
</form>


</div>
</div>
@endsection
