@extends('master')
@section('main')

<!DOCTYPE html>

<head>
<meta charset="UTF-8">

	<script 
	type="text/javascript">
	var value;
	var score=0;
	function showscore()
	{
		document.getElementById("ans").value="";
		var num=Math.floor(Math.random()*10000)
		document.getElementById("rnum").innerHTML=num;
		setTimeout(function(){
			document.getElementById("rnum").innerHTML="";
		},3000)
		var x=num%100;
		var unit=x%10;
		var tens=parseInt(x/10);
		var y=parseInt(num/100);
		var hund=y%10;
		var thou=parseInt(y/10);
		 value=unit+tens+hund+thou;
	}
	function check()
	{
		var txt=document.getElementById('ans').value;
		if(txt==value){
			document.getElementById('won').play();
			score=score+1;
			document.getElementById('jwrd').innerHTML=score;
			document.getElementById('hidden').value=score;
		}
		else
		    document.getElementById('lose').play();

	}
	function time()
	{    
		strt();
		} 
		 function strt()
		 {setTimeout(function(){ 
		 document.getElementById('strt').disabled=true;
		 //document.getElementById('chk').disabled=true;
         confirm('Time up.Your score  '+score);
		  }, 60000);	}
	</script>
	<style type="text/css">
	body
	{
		background: #99CCCC !important;
		}
		.well
		{
			width:400px;
			margin-top: 100px;
		}
		.score
		{
			margin-left: 1200px;
		}
		.scorelist
		{
			margin-left: 1200px;
			margin-top: 30px;
		}
		</style>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body onload="time()">
@if(Session::has('status'))
<label name="xyz" id="usr">
{{Session::get('status')}}
</label>
@endif

<center>
<div class="score">
	{{Form::open(array('url'=>'find','method'=>'post'))}}

{{Form::submit('Get my prev score',$attributes=array('id'=>'save','class'=>'btn btn-primary'))}}
{{Form::close()}}

</div>
<div class="scorelist">
	{{Form::open(array('url'=>'scre','method'=>'post'))}}

{{Form::submit('Scorelist',$attributes=array('id'=>'save','class'=>'btn btn-warning'))}}
{{Form::close()}}

</div>

<div class="well">
<input type="button" value="start" id="strt" onclick="showscore()" class="btn btn-warning">

<p id="rnum">
</p>
<br>
    {{Form::open()}}
    <!--<form action="store" method="post">-->
	<!--<input type="text" id="ans" name="txt"><br><br>-->
	{{Form::text('txt','',$attributes=array('id'=>'ans'))}}
	<!--<input type="button" onclick="check()" value="check" class="btn btn-success">-->
	<!--{{Form::label('tree', 'E-Mail Address', array('class' => 'awesome'))}}-->
    <!--<label id="jwrd" name="nme"></label>--><br>Your Score<p id="jwrd"></p>
    
   {{Form::button('check',$attributes=array('id'=>'chk', 'onclick'=>'check()','class'=>'btn btn-success'))}}
	<br><br>
		<audio id="won">
	<source src="{{asset('uploads/applause-01.wav')}}" preload="auto"></audio>
<audio id="lose">
	<source src="{{asset('uploads/fail-trombone-01.mp3')}}" preload="auto"></audio>



{{Form::close()}}

{{Form::open(array('url'=>'store','method'=>'post'))}}

{{Form::hidden('nme','',$attributes=array('id'=>'hidden'))}}
 {{Form::hidden('usrnme','',$attributes=array('id'=>'usrnme'))}}
</div>
{{Form::submit('Save',$attributes=array('id'=>'save','class'=>'btn btn-danger'))}}
{{Form::close()}}

<script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>


<script type="text/javascript" src="{{URL::asset('underscore.js')}}"></script>
<script src="{{URL::asset('backbone.js')}}"></script>
<script src="{{URL::asset('game.js')}}"></script>

</body>
</html>
@stop
