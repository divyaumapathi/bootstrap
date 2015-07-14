@extends('master')
@section('main')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
	function chk_pass()
	{
		var pass=document.getElementById('pswrd').value;
		if(pass=="admin1234")
		window.open('bookstore_admin');		
			
	}
	</script>
<meta charset="utf-8">
	<style type="text/css">
	.well
	{
		width:220px;
		margin-top: 200px;
	}
	</style>
	
		<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body>
<center>
    <div class="well">
    <form>
         <label>Password</label>
    	<input type="password" name="pass" id="pswrd"><br><br>
    	<input type="button" value="Login" onclick="chk_pass()" class="btn btn-primary">
    </form>
    	</div>





<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
@stop