@extends('master')
@section("content")
<div class="contenter">
<div class="row">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
 
<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>
</div>

@endsection