@extends('master')
@section('main')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
<style>
    .well
    {   
        margin-left: 500px;
        width:500px;
        height:300px;
    }
</style>
</head>
<body><div class="jumbotron">
<center><h1>MonkeyBrain Books</h1></center>
</div>
<div class="well">
 <ul class="nav nav-pills">
    	<li role="presentation"><a href="add_books">Add Books</a></li>
    	<li role="presentation"><a href="delete_books">Remove Books</a></li>
    	<li role="presentation"><a href="update_books">Update Books</a></li> 
    	<li role="presentation"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recently<span class="caret"></span></a>
    	<ul class="dropdown-menu">
    		<li role="presentation"><a href="{{URL::to('recently_added')}}">Added</a></li>
    		<li role="presentation"><a href="{{URL::to('recently_deleted')}}">Deleted</a></li>
    		<li role="presentation"><a href="{{URL::to('recently_updated')}}">Updated</a></li>
    		</li>
    	</ul>

        </ul><br><br><br>
       <center> 
       <form action="all_books" method="get">
       <input type="submit" value="View all books" class="btn btn-success" >
        </form>
        </div>

    

   


<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
@stop