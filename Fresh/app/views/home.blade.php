@extends('master')
@section('main')

<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

<style>
.link1
{
	margin-top:140px;
	margin-left:500px;
	font-size:30px;
}
.link2
{
    margin-top:30px;
	margin-left:600px;
	font-size:30px;
}
body
{
	background: #FFCC99 !important;
}
h1
{
	color:#FF6600 !important;
}
</style>
</head>
<body><center>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Wanna Enter into our site?</h1>
<br>
<br>
@if(Session::has('status'))
<div style="text-align:center;background-color:#cfcfcf;">
{{Session::get('status')}}

	<meta http-equiv="refresh" content="2;url=home">


</div>

@endif
<div class="container">
<div class="row">
<div class="btn-group">
 <button type="button"class="btn btn-danger dropdown-toggle" data-toggle="dropdown" >
    Click me :) <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="login">New user</a></li>
    <li><span class="glyphicon glyphicon-ok"></span><a href="loginform">Existing user</a></li>
   
  </ul>
</div>
</div>
</div>

<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('underscore.js')}}"></script>
<script src="{{URL::asset('backbone.js')}}"></script>

<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('stickView.js')}}"></script>

</body>
</html>
@stop