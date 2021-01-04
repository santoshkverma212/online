@extends('master')
@section("content")

<div class="container">
<div class="custom-product">

<div class="col-sm-10">
<div  class="tranding-wrapper">
<h3>Result for product</h3>
<a href="ordernow" class="btn btn-success">Order Now</a><br/><br/>
    @foreach($products as  $item)
            <div  class="row search-item card-list-divider">
              <div  class="col-sm-3">
                <a href="detail/{{$item->id}}">
                <img class="tranding-img" src="{{$item->gallery}}" >
                </a> 
                </div>
            <div  class="col-sm-3">
                <h3> {{$item->name}} <h3>
                <h5> {{$item->description}} <h5>
            </div>
            <div  class="col-sm-3">
                 <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to card</a>
            </div>
            </div>

    @endforeach
    </div>
    <a href="ordernow" class="btn btn-success">Order Now</a>
</div>
</div>
 
@endsection