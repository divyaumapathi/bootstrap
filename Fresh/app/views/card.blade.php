@extends('master')
@section('main')
<html>
<head>
	<script type="text/javascript">
    function captcha()
    {
    	var captcha=Math.floor((Math.random()*10000));
    	document.getElementById("cptcha").value = captcha;

    }
	</script>
	<meta charset="utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet">


<style type="text/css">
	input#sbmt
	{
		margin-left: 5px;
	}
	center
	{
		margin-top: 170px;
	}
	body
	{
		background: khaki;
	}
	label.cardno
	{
		margin-left: 90px;
	}
	
</style>
</head>
<body onload="captcha()">
<center>

  <form action="crd" method="post">
  
  <label class="cardno">Card Number</label>&nbsp;&nbsp;
  	<input type="text" maxlength="4" id="crdnum1" name="card_number1" size="4px" required> 
  	<input type="text" maxlength="4" id="crdnum2" name="card_number2" size="4px" required> 
    <input type="text" maxlength="4" id="crdnum3" name="card_number3" size="4px" required> 
    <input type="text" maxlength="4" id="crdnum4" name="card_number4" size="4px" required> 

  	<br><br>
  	<label>Name on Card</label>&nbsp;&nbsp;
  	<input type="text"  id="crdname" name="nameoncard" required>
  	<br><br>
  	<label>CVV</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<input type="text" maxlength="3" name="cvv-number" id="cvv" required>
  	<br><br>
  	<input type="hidden" name="captcha" id="cptcha">
  	<div class="col-md-offset-1">
  	<input type="submit" value="Pay" id="sbmt">
  	</div>
  </form>
  <script type="text/javascript" src="{{URL::asset('jquery.js')}}"></script>
  	<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>			      

<script type="text/javascript" src="{{URL::asset('underscore.js')}}"></script>
<script src="{{URL::asset('backbone.js')}}"></script>

		<script type="text/javascript" src="{{URL::asset('cardpay.js')}}"></script>
	</center>
	</body>

</html>
@stop