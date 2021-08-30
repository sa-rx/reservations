@section('title','الرسايل ')
@extends('layouts.app')

@section('content')



  <div class="message mb-4 mt-3 ">
    <h4>الرسايل</h4>
<table class="table table-striped table-hover table-dark ">
  <thead  class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">الاسم</th>
      <th scope="col">عنوان</th>
      <th scope="col">عرض</th>
      <th scope="col">حذف</th>
    </tr>
  </thead>

  <tbody>
    @foreach( $contacts as $contact )


      <tr>
        <td scope="row">{{$contact->id}}</td>
        <td scope="row">{{$contact->name}}</td>
        <td>{{$contact->title}}</td>
        <td> <a class="btn btn-primary" href="{{route('contacts.show',$contact)}}">عرض</a> </td>
       <td>
         <form action="{{route('contacts.destroy',$contact)}}" method="post">
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
