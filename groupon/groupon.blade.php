@extends('master')
@section('main')
<html>
<head>
<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript">

	var images = new Array()

images[0] = "{{asset('uploads/train.jpg')}}";
images[1] = "{{asset('uploads/oryza.jpg')}}";
images[2] = "{{asset('uploads/senza.jpg')}}";

setTimeout("changeImage()", 3000);
var x=0;

function changeImage()
{
document.getElementById("img").src=images[x]
x++;
}
</script>
<style type="text/css">
	h1
	{
		padding-top: 30px;
		color:#336699;
	}
	img
	{
		margin-left:180px;
		width:1200px;
		height:500px;
	}
   

</style>
</head>
	<body onload="changeImage()">
		<div class="container">
			<div class="row">
				
				      <div id="title" style="text-align:center;background-color:#009966;height:100px">
				      	<h1><center>Groupon</center></h1>
				      </div>
				      <div class="form-group">
				      <br>
				      	<ul class="nav nav-pills nav-stacked">
				      	
				      		  <li role="presentation" class="active"><a href="#">Home</a></li>
 							  <li role="presentation" name="food" id="food" ><a href="http://localhost:8000/submit?text=1&1=show">Food</a></li>
                              <li role="presentation" name="spa" id="spa" ><a href="http://localhost:8000/submit?text=2&1=show">Spa</a></li>
                        
				      	</ul>
				      </div>
				    </div>
				  </div>
			 <img src="{{asset('uploads/Penguins.jpg')}}" alt="penguins" id="img"/>
		<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
		<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
	</body>
</html>

@stop