@extends('master')
@section('main')    

<head>
      <style>
	.sub
	{
		margin-left: 100px;
	}
	body
	{
		margin-bottom:250px;
		}
	 .form-group
	{
		margin-left: 40px;
	}
	.col-md-3
	{
		margin-left: 55px;
    }
  

</style>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>    
<body>    <center>
@if(Session::has('session'))
<div style="text-align:center;background-color:#cfcfcf;">
{{Session::get('session')}}
</div>

@endif 
               <br>
               <br>
               <br>
             <br>
             <br>
             <br>
<div class="container-fluid">
<div class="row">
<div class="panel col-md-offset-4 col-md-4 col-sm-4" style="background:#CC6666">
<div class="panel-heading">
<h1 class="panel-title" style="color:white"><b>Login</b></h1>
</div>
<div class="panel-body">
<div class="well" style="background:#CC6666">
	{{Form::open(array('url'=>'insrt_lgin','method'=>'post','id'=>'form','class'=>"form-horizontal"))}}
	<div class="form-group">
		<div class="col-md-offset-3 col-md-6  col-sm-2">
			{{Form::text('user','',$attributes = array('id' => 'usrnme','class' => 'form-control col-md-3','required' => 'required','placeholder'=>'UserName'))}}		
		</div>  
	</div>		
	<div class="form-group">
		<div class="col-md-offset-3 col-md-6 col-sm-2">
			{{Form::password('pass',$attributes=array('id'=>'paswrd','required' => 'required','class' => 'form-control col-md-3','placeholder'=>'Password'))}}
		</div> 
	</div>
	<div class="form-group">
		<div class="col-md-offset-3 col-md-6 col-sm-2">
		{{Form::submit('Login',$attributes = array('id' => 'sbt','class'=>"btn"))}}
		</div>
	</div>
	{{Form::close()}}	
</div>
</div>
</div>
</div>
</div>
{{Form::open(array('url'=>'reset','method'=>'get'))}}
{{Form::submit('Forgot Password?',$attributes=array('name'=>'rset','class'=>'btn btn-warning'))}}
{{Form::close()}}

<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('validation.js')}}"></script>
</center>
</body>

</html>
@endsection