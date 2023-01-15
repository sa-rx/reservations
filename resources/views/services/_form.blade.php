<div class="row">


@csrf
<div class="form-group col-md-6">
  <label for="service_name">اسم الخدمه</label>
  <input type="text" name="service_name" class="form-control" @isset($service) value="{{$service->service_name}}" @endisset>
</div>



<div class="form-group col-md-6">
  <label for="conten">محتوى الخدمه</label>
  <input type="text" name="conten" class="form-control" @isset($service) value="{{$service->conten}}" @endisset>
</div>



<div class="form-group col-md-6">
  الادوات :   
  @foreach($tools as $id => $title)
  <label for="tool_{{$id}}">{{$title}}</label>
  <input type="checkbox" name="tools[]" value="{{$id}}" id="tool_{{$id}}"
          @if(isset($service) && in_array($id, $serviceTool)) checked @endif
  >
  @endforeach
</div>


<div class="form-group col-md-6">
  <label for="img_url">صوره للخدمه</label>
  <input type="text" id="img_url" name="img_url" class="form-control" @isset($service) value="{{$service->img_url}}" @endisset>
@isset($service)
  <img src="{{$service->img_url}}" alt="" style="width: 46px;">
@endisset
</div>

<div class="form-group col-md-6">
  <label for="price">سعر الخدمه</label>
  <input type="text" name="price" class="form-control" @isset($service) value="{{$service->price}}" @endisset>
</div>

<div class="form-group col-md-6">
  <label for="price">سعر الخدمه مع العرض</label>
  <input type="text" name="offer_price" class="form-control" @isset($service) value="{{$service->offer_price}}" @endisset>
</div>

<div class="form-group">
  <button class="btn btn-primary">{{$submitText}}</button>
</div>


</div>
