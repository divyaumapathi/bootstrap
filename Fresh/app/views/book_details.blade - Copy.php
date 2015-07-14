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
	<script>
	function decrease()
	{
		var a=this.getElementById(2);
		alert(a);
	}
	</script>
</head>
	<body>
	<table>
		<tr>
			<th>Book ID</th>
			<th>Book Name</th>
			<th>Book Category</th>
			<th>Author</th>
			<th>Available</th> 
		</tr>
	
	    <tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		
		</tr>
	
	</table>
<form action="pdf" method="post">
<input type="submit" value="click">
</form>	
	</body>
</html>
@stop