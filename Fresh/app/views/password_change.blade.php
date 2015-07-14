@extends('master')
@section('main')
<html>
<head>
	<style type="text/css">
	body
	{
		
		margin-top: 200px !important;
	}
	label{
		color:#FF9933;
	}
	.well
	{
		width:500px;
	}
	h2
	{
		margin-top: 100px !important;
		color:#FF6699 !important;
	}
	</style>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
    <body>
    <center>
    <h2>Here You Go!!!</h2>
    <div class="well">
    	{{Form::open(array('url'=>'rset','method'=>'post'))}}
    	<div class="col-md-offset-3">
    	{{Form::label('usr','Enter your Username')}}
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	{{Form::text('username','',$attributes=array('id'=>'username','required'=>'required'))}}
    	</div>
    	<br>
    	<div class="col-md-offset-3">&nbsp;
    	{{Form::label('usr','Enter your New Password')}}&nbsp;&nbsp;&nbsp;&nbsp;
    	{{Form::text('newpass','',$attributes=array('id'=>'newpass'))}}
    	</div>
    	<!--{{Form::label('new','Enter your new password')}}
    	{{Form::text('new_pass','',$attributes=array('id'=>'new_password'))}}-->
    	<br><br>
    	<div class="col-md-offset-4">
    	{{Form::submit('Change',$attributes=array('id'=>'chnge','class'=>'btn btn-warning','required'=>'required'))}}
    	</div>
    	</div>
    <script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>			      
    </body>
</html>
@stop