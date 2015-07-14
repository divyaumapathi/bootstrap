@extends('master')
@section('main')
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
	img
	{
		width:200px;
		height:150px;
		margin-left: 100px;
	}
	label.name
	{
		padding-left: 100px;
       text-align: center;
       color:darkcyan;
       font-size: 20px;
	}
	label.deal,label.percent
	{
		font-size: 20px;
		color:tomato;
	}
	body
	{
		background: peachpuff;
	}
	h1
	{
		color:crimson;
	}
	label.cut
	{
		text-decoration: line-through;
	}
</style>
<script type="text/javascript">
	function myfunction()
	{
		var r=confirm('Buy??');
		if(r==true)
		{
          // <?php header('Location:http://localhost:8000/home');?>
		   //window.history.go(-2);
		   window.open('http://localhost:8000/card');
		}
	}
</script>
</head>
<body>
<center><h1>Spa's in chennai</h1></center>
@foreach($data as $dat)

	<div class="row">
	   <div class="col-md-offset-1">
	   
	   <label class="name">{{$dat->title}}</label><br>
		<img src="{{$dat->image}}">
        
        &nbsp;&nbsp;
        <label class="deal">Deal</label>&nbsp;
        <label class="percent">{{$dat->deal}}</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" value="Avail" class="btn btn-success" id='sbmt' onclick="myfunction()"></input>
       <?php Redirect::to('home');?>
        </div>

	</div>

<br><br>
@endforeach
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>	
<!--<script type="text/javascript" src="{{URL::asset('validation.js')}}"></script>	-->	      

</body>
</html>
@stop