@extends('master')
@section('main')
<html>
 <head>
 	<style type="text/css">
        h2
        {
        	color:#FF6633 !important;
        }
        label
        {
        	color:mediumvioletred !important;
        }
 	</style>
 	<link href="css/bootstrap.min.css" rel="stylesheet">
 </head>
    <body>
    <center>
    <h2>You Are 1 Step Away!!!</h2>
    <br><br>
    <div class="well">
    	{{Form::open(array('url'=>'reset_pass','method'=>'post'))}}
    	{{Form::label('usr','Enter your Mailid')}}
    	{{Form::text('mailid','',$attributes=array('id'=>'mailid'))}}<br><br>
    	<!--{{Form::label('new','Enter your new password')}}
    	{{Form::text('new_pass','',$attributes=array('id'=>'new_password'))}}-->
    	<div class="col-md-offset-1">
    	{{Form::submit('Mail',$attributes=array('id'=>'chnge','class'=>'btn btn-danger'))}}
    	</div>
    	 <script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
	     <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>			      
   
    </body>
</html>
@stop