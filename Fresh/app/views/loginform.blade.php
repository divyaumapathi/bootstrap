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
		background:#FF9999 !important;

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
	{{Form::open(array('url'=>'lgin','method'=>'post','id'=>'form','class'=>"form-horizontal"))}}
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
		{{Form::submit('Login',$attributes = array('id' => 'sbmt','class'=>"btn"))}}
		</div>
	</div>
	{{Form::close()}}	
</div>
</div>
</div>
</div>
</div>
<nav>
	    <ul class="pagination" >
	       <li>
	             <a href="home" aria-label="previous">
	             <span aria-hidden="true" style="color:red"><b>&laquo;</b></span>
	             </a>
	       </li>
	   </ul>
	</nav>


<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('validation.js')}}"></script>
</center>
</body>

</html>
@endsection