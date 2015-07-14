@extends('master')
@section('main')
<html>
	<head>
		<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<style>
	.well
	{
		width:220px;
		margin-left: 500px;
		background: khaki;
	}
</style>
	</head>
	<body>
	@if(Session::has('status'))
<div style="text-align:center;background-color:#cfcfcf;">
{{Session::get('status')}}
<meta http-equiv="refresh" content="3;url=bookstore">
</div>
@endif
<div class="jumbotron">
<center><h1>MonkeyBrain Books</h1></center>
</div>
	<br><br><br><br>
	<div class="well">
		{{Form::open(array('url'=>'search_book','method'=>'post'))}}
		{{Form::label('Search By')}}
		{{Form::select('Search_by',['Name','Author','Category'],'Id')}}
		<br><br>

		{{Form::text('name','',$attributes=array())}}
		<br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Form::submit('Search',$attributes=array('id'=>'srch','class'=>'btn btn-success'))}}
	    {{Form::close()}}

</div>
<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

	</body>
</html>
@stop