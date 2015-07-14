@extends('master')
@section('main')    
<html>
<head>
<style type="text/css">
	.sub
	{
		margin-left: 130px;
	}
</style>
</head>    
<body>                             
<h1>Create new user</h1>
{{Form::open(array('url'=>'users','method'=>'post'))}}
{{Form::label('UserName')}} &nbsp;&nbsp;&nbsp;&nbsp;                        
{{Form::text('user')}}
<br>
<br>

{{Form::label('Password')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{{Form::password('pass')}}
<br>
<br>
<div class="sub">
{{Form::submit('submit')}}
</div>
{{Form::close()}}
</body>
</html>
@endsection