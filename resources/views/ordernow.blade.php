@extends('master')
@section("content")

<div class="custom-product">
<div class="col-sm-10">
<table class="table">
     <tbody>
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
     </tr>
      <tr>
        <td>Tax</td>
        <td>0</td>
      </tr>
      <tr>
        <td>Delivary</td>
        <td>$10</td>
       </tr>
      <tr>
        <td>Total Amount</td>
        <td>${{$total+10}}</td>
       </tr>
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
  <div class="form-group">
  @csrf
    <textarea name="address" placeholder="Please Enter Address" class="form-control" ></textarea >
  </div>
  <div class="form-group">
    <label for="pwd">Payment methode:</label><br/><br/>
    <input type="radio" value="cash" name="payment"> <span>Online Payment</span><br/><br/>
    <input type="radio" value="cash" name="payment"> <span>EMI Payment</span><br/><br/>
    <input type="radio" value="cash" name="payment"> <span> Payment On Delivery</span>
   
  </div>
  
  <button type="submit" class="btn btn-default">Order Now</button>
</form>
  </div>
</div>
</div>
 
@endsection