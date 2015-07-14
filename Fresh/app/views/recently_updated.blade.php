@extends('master')
@section('main')
<html>
<head>
	<style type="text/css">
	 table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: center;
}
	</style>
</head>
	<body>
	<table>
		<tr>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Book Category</th>
			<th>Book Author</th>
			<th>Count</th>

		</tr>
		@foreach($data as $result)
	    <tr>
		<td>{{$result->Id}}</td>
		<td>{{$result->Name}}</td>
		<td>{{$result->Category}}</td>
		<td>{{$result->Author}}</td>
		<td>{{$result->Count}}</td>	
		</tr>
		@endforeach
	</table>
		
		
		
	</body>
</html>
@stop