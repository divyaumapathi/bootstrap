@extends('master')
@section('main')
<html>
<head>
	<style type="text/css">
	label
	{
		color:hotpink;
	}
	</style>
</head>
<body>
<label>Person Name</label>
<p>{{$data->Name}}</p>
<label>Card Number</label>
<p>{{$data->CardNumber}}</p>
<label>Cvv </label>
<p>{{$data->Cvv}}</p>
</body>
</html>
@stop