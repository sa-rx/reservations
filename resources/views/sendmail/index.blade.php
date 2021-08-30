@section('title','الايميلات ')
@extends('layouts.app')

@section('content')



  <div class="message mb-4 mt-3 ">
    <a class="btn btn-primary"  href="{{route('sendmails.create')}}">ارسال ايميل</a>

<br><br>
<table class="table table-striped table-hover table-dark ">
  <thead  class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">عنوان الرساله</th>
      <th scope="col">عرض</th>
      <th scope="col">حذف</th>

    </tr>
  </thead>

  <tbody>
    @foreach( $sendmails as $sendmail )


      <tr>
        <td scope="row">{{$sendmail->id}}</td>
        <td scope="row">{{$sendmail->title}}</td>

        <td> <a class="btn btn-primary" href="{{route('sendmails.show',$sendmail)}}">عرض</a> </td>
       <td>
         <form action="{{route('sendmails.destroy',$sendmail)}}" method="post">
           @csrf
           @method('DELETE')
           <button class="btn btn-danger btn-sm">حذف <i class="fas fa-trash-alt"></i></button>
         </form>
       </td>

      </tr>

      @endforeach
        </tbody>
</table>
</div>



@endsection
