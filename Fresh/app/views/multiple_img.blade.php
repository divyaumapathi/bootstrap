@extends('master')
@section('main')
<html>
	<head>
		
	</head>
	<body>
	<form  action="upload" method="post" file="true" enctype="multipart/form-data">
		<input type="file" name="images" multiple>
		<input type="submit" name="click" value="Submit">
	</form>
	</body>
</html>
@stop