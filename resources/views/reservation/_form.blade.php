<div class="row">

  @csrf
  @Auth
  @if(Auth::user()->hasRole('Admin') || Auth::user()->hasRole('User'))
    <input type="hidden" value="{{Auth::user()->name}}" name="name" class="form-control">
    @endauth
  @else

  <div class="form-group col-md-6">
    <label for="name">الاسم</label>
    <input type="text" name="name" class="form-control">
  </div>
  @endif

  <div class="form-group col-md-6">
    <label for="price">اسم السياره</label>
    <input type="text" name="car_name" class="form-control">
  </div>


  <div class="form-group col-md-6">
    <label for="price">رقم الجوال</label>
    <input type="text" name="number" class="form-control">
  </div>




  <div class="form-group col-md-6">
    <label  for="service_id" >نوع الحجز</label>
    <select class="form-control"  name="service_id" id="service_id">

      @foreach($services as $service)
       <option value="{{$service->id}}">{{$service->service_name}}</option>
       @endforeach
     </select>

  </div>



    <div class="form-group col-md-6">
      <label for="time">وقت الحجز</label>
      <input class="form-control" type="date" id="time" name="time" >
    </div>








</div>

<div class="form-group ">
  <label for="price">ملاحظات</label>
  <textarea name="content" class="form-control"></textarea>
</div>





<div class="form-group">
  <button class="btn btn-primary">حجز</button>
</div>
