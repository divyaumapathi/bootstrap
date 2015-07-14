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
body
{

	background: #009966;
}
center
{
	margin-top: 100px;
}
</style>
</head>
<body>
<center>
	   <table width="40%">
	   <tr>
	   
	   <th>Name</th>
	   <th>Score</th>
	   </tr>

	   <tr>
	   @foreach($lists as $data)
	   <td>{{$data->Name}}</td>
	   <td>{{$data->score}}
	</td>
	</tr>
	 	@endforeach
	   </table>
	  
</body>
</html>

@stop