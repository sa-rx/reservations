@section('title',' تعديل بيانات الخدمه ')
@extends('layouts.app')

@section('content')

<h4>تعديل بيانات الخدمه</h4>


<div class="card">
<div class="container pt-3">


<form  action="{{route('services.update',$service)}}" method="post" enctype="multipart/form-data">
  @method('PATCH')
  @include('services._form', ['submitText'=>'تعديل'])
</form>


</div>
</div>

@endsection
