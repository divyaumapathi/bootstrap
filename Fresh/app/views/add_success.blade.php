@extends('master')
@section('main')
<html>
<head>
	<style type="text/css">
        center
        {
        	margin-top: 200px;
        }
	</style>
	<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>
	<body>
	<center>
	<p style="color:Tomato"><b>Successfully Added!!!</b></p>
	<br>
	<input type="button" data-toggle="modal" value="View book" data-target="#modal" class="btn btn-success">
	<div class="modal fade" id="modal">
	<div class="modal-dialog modal-sm">
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
    @foreach($data as $result)
	<h4 class="modal-title"> {{$result->Name}}</h4>
	@endforeach
	</div>
	<div class="modal-body">
	@foreach($data as $result)
	<p><b>Author:</b>{{$result->Author}}</p>
	<p><b>Category:</b>{{$result->Category}}</p>
	@endforeach
	</div>	
	
	</div>
	</div>
	</div>
	<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</center>
	</body>
</html>
@stop