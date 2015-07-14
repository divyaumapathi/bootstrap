@extends('master')
@section('main')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       <form action="update" method="post">
       <label>Book Name</label>
       <input type="text" name="buk_name">
       <label>Count</label>
       <input type="text" name="count">
       <input type="submit" value="Update">
       </form>
</body>
</html>
@stop