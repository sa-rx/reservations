@extends('layouts.app')

@section('title','المستخدمين')

@section('content')



<table class="table table-striped table-hover table-dark ">
  <thead  class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">الاسم</th>
      <th scope="col">الايميل</th>
      <th scope="col">مستخدم</th>
      <th scope="col">ادمن</th>
      <th scope="col">مشرف</th>

    </tr>
  </thead>



  <tbody>
    @foreach($users as $user)
    <form class="" action="add-role" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$user->id}}">

      <tr>
        <td scope="row">{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>

       <td>
           <input type="checkbox" onchange="this.form.submit()" name="role_user"   {{ $user->hasRole('User') ? "checked" : ' '}}>
       </td>
       <td>
          <input type="checkbox"  onchange="this.form.submit()" name="role_admin"   {{ $user->hasRole('Admin') ? "checked" : ' '}}>
       </td>
       <td>
          <input type="checkbox"  onchange="this.form.submit()" name="role_editor"  {{$user->hasRole('Editor') ? "checked" : ' '}}>
       </td>



      </tr>
      </form>
      @endforeach
        </tbody>
</table>



@endsection
