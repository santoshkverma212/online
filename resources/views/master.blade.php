<!DOCTYPE html>
<html>
<head>
<title>Online shope</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
<style>
img.slider-img{
height:300px;
}
.slider-text{
  background-color: #dcdede99;
}
.tranding-img{
  height:100px;
  border: 2px solid #ccc;
}
.tranding-item{

  float:left;
  width:20%;
  
}
.tranding-wrapper{
  margin:20px;
}
.search-box{
  width:400px !important;
}
.card-list-divider{

border-bottom:1px  solid #ccc;
margin-bottom:20px;
padding-bottom:20px;
}
</style>
</body>
</html>