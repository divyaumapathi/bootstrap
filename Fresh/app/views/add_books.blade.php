@extends('master')
@section('main')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
 <ul class="nav nav-pills">
    	<li role="presentation"><a href="add_books">Add Books</a></li>
    	<li role="presentation"><a href="delete_books">Remove Books</a></li>
    	<li role="presentation"><a href="update_books">Update Books</a></li> 
    </ul>
    <div class="well">
    	{{Form::open(array('url'=>'add','method'=>'post'))}}
    	{{Form::label('Book Id')}}
    	{{Form::text('id','',$attributes=array())}}
    	{{Form::label('Book Name')}}
    	{{Form::text('name','')}}
    	{{Form::label('Book Category')}}
    	{{Form::text('categry','')}}
    	{{Form::label('Author')}}
    	{{Form::text('author','')}}
    	{{Form::label('Count')}}
    	{{Form::text('count','')}}
    	{{Form::submit('Add',$attributes=array('class'=>'btn btn-danger'))}}
    	{{Form::close()}}
    </div>
   


<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
@stop