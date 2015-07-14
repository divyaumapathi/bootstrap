@extends('master')
@section('main')
<html>
<head>
<script type="text/javascript">
	var score=0;
	var score1=0;
	var count=0;
	var count1=0;
	function rand()
	{   count=count+1;
		if(count<=5)
		{
		var value=Math.floor((Math.random()*6)+1);
		score=score+value;
		//document.getElementById("rid").innerHTML=value;
	    document.getElementById("pid").innerHTML=score;}
	    else
{
	alert('your chance gt over');
}
	}
	function form2()
	{ 
		count1=count1+1;
		if(count1<=5)
		{
		var value=Math.floor((Math.random()*6)+1);
		score1=score1+value;
		//document.getElementById("rid").innerHTML=value;
	    document.getElementById("rid").innerHTML=score1;
	}
	else
	{
		alert('no more chances');
	}
	}
	function highscore()
	{
		var x=document.getElementById('pid').innerHTML;
		var y=document.getElementById('rid').innerHTML;
		if(x>y)
			alert('Player1 wins');
		else
			alert('player2 wins');
	}
</script>	
</head>
<body>
	<form>
	<input type="button" value="Roll" onclick="rand()">
	
	<p id="pid" >0</p>
	</form>
	<form>
	<input type="button" value="Roll" onclick="form2()">
	<p id="rid">0</p>

	</form>
	<input type="button" value="highest" onclick="highscore()">
</body>
</html>
@stop