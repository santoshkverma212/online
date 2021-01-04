@extends('master')
@section("content")

<div class="container">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    @foreach($products as  $item)
      <div style="height:300px;" class="item {{ $item['id']==1?'active':''}} ">
      <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles" style="width:100%;">
        </a>
        <div class="carousel-caption slider-text">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      
      @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="tranding-wrapper">
<h3>Tranding Product</h3>

@foreach($products as  $item)
      <div  class="tranding-item">
      <a href="detail/{{$item['id']}}">
        <img class="tranding-img" src="{{$item['gallery']}}" >
        </a> 
        <div >
       {{$item['name']}} 
        </div>
      </div>

      
      @endforeach


</div>
 
@endsection