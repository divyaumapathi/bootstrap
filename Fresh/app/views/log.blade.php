@extends('master')
@section('main')    
<html>
<head>
<style type="text/css">
	.sub
	{

		margin-left: 90px;
	}
	body
	{
		margin-top:150px;
		background: #CCFFCC !important;
	}
	h1
	{
		color:#009933 !important;
	}
</style>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
</head>    
<body>  
<br>
<br>
<br>      
<center>                     
<h1>Register Here</h1>
<div class="container">
<div class="row">
<div class="panel panel-success col-md-offset-3 col-md-6">
<div class="panel-body">
{{Form::open(array('url'=>'lg','method'=>'post','class'=>"form-horizontal"))}}
<div class="form-group">
		<div class="col-md-offset-4 col-md-4 col-sm-4">                       
			{{Form::text('user','',$attributes=array('id' => 'rgstr','required' => 'required','placeholder'=>'Username','class' => 'form-control col-md-3'))}}
		</div>
</div>
<div class="form-group">
	<div class="col-md-offset-4 col-md-4">
		{{Form::password('pass',$attributes=array('id' => 'password','required' => 'required','class' => 'form-control col-md-3','placeholder'=>'Password'))}}
	</div>
</div>

<div class="form-group">
	<div class="col-md-offset-4 col-md-4">
	<div id="regstr">
		{{Form::submit('Register' ,$attributes = array('id' => 'sbmt','class'=>"btn btn-success"))}}
	</div>
	</div>
</div>

{{Form::close()}}
</div>
</div>
</div>

	    <ul class="pagination" >
	       <li>
	             <a href="home" aria-label="previous">
	             <span aria-hidden="true" style="color:#00CC33"><b>&laquo;</b></span>
	             </a>
	       </li>
	   </ul>
	</nav>

</div>

<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>


<script type="text/javascript" src="{{URL::asset('underscore.js')}}"></script>
<script src="{{URL::asset('backbone.js')}}"></script>
<script src="{{URL::asset('stickView.js')}}"></script>

</body>
</html>

@endsection