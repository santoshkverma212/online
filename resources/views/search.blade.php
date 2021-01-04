@extends('master')
@section("content")
<div class="custom-product">
<div class="col-sm-4">
<a href="">Filter </a>
</div>
<div class="col-sm-4">
<div class="tranding-wrapper">
<h4>Search for  Product</h4>

@foreach($products as  $item)
      <div  class="search-item">
      <a href="detail/{{$item['id']}}">
        <img class="tranding-img" src="{{$item['gallery']}}" >
        </a> 
        <div >
      <h2> {{$item['name']}} </h2>
      <h5> {{$item['description']}} </h5>
      <h5> {{$item['category']}} </h5>
        </div>
      </div>

     
      @endforeach


</div>

</div>

</div>
 
@endsection