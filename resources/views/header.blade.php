<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total = ProductController::cartItem();

}
 ?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="#">AboutUs</a></li>
      <li><a href="#">Services</a></li>
      
    </ul>
    <form action="/search" class="navigation-form navigation col-sm-6">
        <table><tr><td><input class="form-control search-box" name="query" type="search" placeholder="Search" aria-label="Search"></td><td>&nbsp;
        <button class="btn btn-primary" type="submit"> Search</button></td></tr></table>
      </form>

    <ul class="nav navbar-nav">
  <li><a href="/cartList"> cart(<?php echo $total; ?>)</a></li>
  @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
        <!--  <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>-->
        </ul>
      </li>
      @else
      <li> <a href="/login">Login</a></li>
      @endif
  </ul>
  </div>
  
</nav>
     
    